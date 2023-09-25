<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\LogActivity;
use App\Models\LoginOtp;
use App\Models\User;
use App\Models\UserDeviceDetail;
use App\Models\VerificationCode;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Jenssegers\Agent\Facades\Agent;

class OTPController extends Controller
{
    public function loginOtpGenerate(Request $request)
    {
        $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required',
        ]);

        $user = User::where('email',$request->email)->first();
        if($user && Hash::check($request->password, $user->password))
        {
//            if('active' == $user->status)
//            {
                # Validate Data

                // calculate verification expiry date time
                // get the latest login activeity of user
                $macAddr = exec('getmac');
                $userMacAdress = substr($macAddr, 0, 17);

                $userCurrentBrowser = Agent::browser();
                $userLastOtpVerified = LoginOtp::where('user_id', $user->id)
                    ->orderBy('id','DESC')->first();
                info($userLastOtpVerified);
                // check opt table has entry
                if($userLastOtpVerified) {
                    $latestLoginActivity = UserDeviceDetail::where('user_id', $user->id)->orderBy('id','DESC')->first();
                    // check the mac address change to check whether the device is changed or not
                    if($latestLoginActivity) {
                        if($latestLoginActivity->mac_address == $userMacAdress ) {
                            info("mac address same");
                            if($latestLoginActivity->browser == $userCurrentBrowser) {
                                info("browser name same");

                                $userLastOtpVerifiedDate = Carbon::parse($userLastOtpVerified->created_at)->addDays(30);
//                            $otpExpirationDate = $userLastOtpVerifiedDate->format('d/m/Y');
                                info($userLastOtpVerifiedDate);
                                $currentDate = Carbon::now();
                                if($currentDate->isBefore($userLastOtpVerifiedDate)) {
                                    info("expiration  date NOT reached");

                                    $request['user_id'] = $user->id;
                                    return(app('App\Http\Controllers\Auth\AuthenticatedSessionController')->store($request));
                                }
                            }
                        }
                    }

                }

                # Generate An OTP
                $verificationCode = $this->generateOtp($request->email);
//                info("otp controller");
//                info($verificationCode);
                $message = "Your OTP To Login is Send Successfully ";
                # Return With OTP
                $data['email'] = $request->email;
                $data['name'] = 'Hello,';
                $data['otp'] = $verificationCode->otp;
                $template['from'] = 'no-reply@milele.com';
                $template['from_name'] = 'Milele Car Rental';
                $subject = 'Milele Car Renatal Login OTP Code';
                Mail::send(
                    "admin.auth.otp-email",
                    ["data"=>$data] ,
                    function($msg) use ($data,$template,$subject) {
                        $msg->to($data['email'], $data['name'])
                            ->from($template['from'],$template['from_name'])
                            ->subject($subject);
                    }
                );
                $user_id = Crypt::encryptString($verificationCode->user_id);
                $email = Crypt::encryptString($request->email);
                $password = Crypt::encryptString($request->password);
                return redirect()->route('otp.verification', ['user_id' => $user_id, 'email'=>$email,'password'=>$password])->with('success',  $message);
//            }
//            else
//            {
//                Session::flash('error','You are not Active by Admin.');
//                return view('admin.auth.login');
//            }
        }
        else
        {
            Session::flash('error','These credentials do not match our records.');
            return view('admin.auth.login');
        }
//        return view('admin.auth.login');
    }
    public function generateOtp($email)
    {
//        info($email);
//        info("generate OTP");
        $user = User::where('email', $email)->first();

        # User Does not Have Any Existing OTP
        $verificationCode = LoginOtp::where('user_id', $user->id)->latest()->first();

        $now = Carbon::now();

        if($verificationCode && $now->isBefore($verificationCode->expired_at)){
            info("already have code without expiry");
            return $verificationCode;
        }

        // Create a New OTP
        $otp = new LoginOtp();
        $otp->user_id = $user->id;
        $otp->otp = rand(123456, 999999);
        $otp->expired_at = Carbon::now()->addMinutes(10);
        $otp->save();
        return $otp;

//        return LoginOtp::create([
//            'user_id' => $user->id,
//            'otp' => rand(123456, 999999),
//            'expired_at' => Carbon::now()->addMinutes(10)
//        ]);
    }
    public function verification($user_id, $email, $password)
    {
        $user_id= Crypt::decryptString($user_id);
        $email= Crypt::decryptString($email);
        $password= Crypt::decryptString($password);
        return view('admin.auth.otp-verification')->with([
            'user_id' => $user_id,
            'email' => $email,
            'password' => $password,
        ]);
    }
}
