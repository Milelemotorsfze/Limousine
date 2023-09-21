<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
    Route::get('/login', function () {
        return view('admin.authentication.login');
    });
    Route::get('/register', function () {
        return view('admin.authentication.register');
    });
    Route::get('/forgot-password', function () {
        return view('admin.authentication.forgot-password');
    });

    Route::get('/reset-password', function () {
        return view('admin.authentication.reset-password');
    });
    Route::get('/', function () {
        return view('pages.home');
    });
    Route::controller(Controller::class)->group(function(){
        Route::get('/home', 'home')->name('home');
        Route::get('/about-us', 'aboutUs')->name('aboutUs');
        Route::get('/faq', 'faq')->name('faq');
        Route::get('/contact-us', 'contactUs')->name('contactUs');
        Route::get('/vehicles', 'vehicles')->name('vehicles');
    });
    Route::resource('contacts', ContactController::class);

