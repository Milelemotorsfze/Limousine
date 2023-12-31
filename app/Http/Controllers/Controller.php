<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Carbon\Carbon;
use App\Models\Subscriptions;
use Illuminate\Http\Request;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function home()
    {
        return view('pages.home');
    }
    public function aboutUs()
    {
        return view('pages.aboutUs');
    }
    public function faq()
    {
        return view('pages.faq');
    }
    public function contactUs()
    {
        return view('pages.contactUs');
    }
    public function vehicles()
    {
        return view('pages.vehicles');
    }
    public function details()
    {
        return view('pages.details');
    }
    public function secondVehicleDetail() {
        return view('pages.vehicles.detail-2');
    }
    public function kiaK5VehicleDetail() {
        return view('pages.vehicles.detail-5');
    }
    public function picantodetails()
    {
        return view('pages.picantodetails');
    }
    public function chevroletdetails()
    {
        return view('pages.chevroletdetails');
    }
    public function subscriptions(Request $request)
    {
        DB::beginTransaction();
        try 
        {
            $isExist = Subscriptions::where('email',$request->email)->first();
            if($isExist)
            {
                $isExist->request_submit_count = $isExist->request_submit_count + 1;
                $isExist->last_submited_at = Carbon::now();
                $isExist->save();
            }
            else
            {
                $input['email'] = $request->email;
                $input['request_submit_count'] = 1;
                $input['last_submited_at'] = Carbon::now();
                Subscriptions::create($input);
            }
            DB::commit();
            if($request->contact_page == true) {
                return response()->json(true);
            }
            return redirect()->back()->with(['message' => 'subscribed successfully']);
            // all good
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with(['error' => 'subscription failed']);
        }
    }
    public function subscriptionsListing()
    {
        $subscriptions = Subscriptions::all();
        return view('admin.pages.subscriptions.index',compact('subscriptions'));
    }
}
