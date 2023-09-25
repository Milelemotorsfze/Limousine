<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

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

}
