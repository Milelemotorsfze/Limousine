<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\LoginOtp;
use App\Models\User;
use App\Models\UserDeviceDetail;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use Jenssegers\Agent\Facades\Agent;
use NazmulB\MacAddressPhpLib\MacAddress;
use Session;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('admin.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(Request $request)
    {
//        $request->authenticate();
//        $request->session()->regenerate();
//
//        return redirect()->intended(RouteServiceProvider::HOME);

        $request->validate([
            'user_id' => 'required|exists:users,id',
        ]);
        #Validation Logic
        $user = User::whereId($request->user_id)->first();
        if($request->otp) {
            $verificationCode  = LoginOtp::where('user_id', $request->user_id)->where('otp', $request->otp)->first();
            $now = Carbon::now();
            if(!$verificationCode)
            {
                return redirect()->back()->with('error', 'Your OTP is not correct');
            }elseif($verificationCode && $now->isAfter($verificationCode->expire_at))
            {
                return redirect()->route('login')->with('error', 'Your OTP has been expired');
            }
            else{
                if($user) {
                    // Expire The OTP
                    $verificationCode->update([
                        'expired_at' => Carbon::now()
                    ]);
                }
            }
        }

        if($user){
            // Expire The OTP
            if(Auth::attempt(['email'=>$request->email,'password'=> $request->password]))
            {
//
//                if(Auth::user()->status == 'active')
//                {
//                    $macAddr = exec('getmac');
//                    $userMacAdress = substr($macAddr, 0, 17);
                      $userMacAdress = MacAddress::getMacAddress();
                    if(Agent::isPhone() == 'phone') {
                        $useDevice = 'phone';
                    }elseif (Agent::isTablet() == 'tablet') {
                        $useDevice = 'tablet';
                    }elseif (Agent::isDesktop() == 'desktop') {
                        $useDevice = 'desktop';
                    }

                    $userDeviceDetail = new UserDeviceDetail();
                    $userDeviceDetail->ip_address = $request->ip();
                    $userDeviceDetail->user_id = Auth::id();
                    $userDeviceDetail->mac_address = $userMacAdress;
                    $userDeviceDetail->device = $useDevice ?? '';
                    $userDeviceDetail->browser = Agent::browser();
                    $userDeviceDetail->save();
                    Auth::login($user);
                    return redirect()->route('dashboard');

//                }
//                else
//                {
//                    Session::flash('error','You are not Active by Admin');
//                    return view('admin.auth.login');
//                }
            }
            else
            {
//                dd("user not found");
                Session::flash('error','These credentials do not match our records.');
                return view('admin.auth.login');
            }
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
