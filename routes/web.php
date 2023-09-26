<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EnquiresController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    // return view('pages.home');
    return view('pages.comingsoon');
});
Route::get('/dashboard', function () {
    return view('admin.pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/enquires', function () {
        return view('admin.pages.enquires.index');
    });
});

require __DIR__.'/auth.php';

Route::controller(\App\Http\Controllers\Auth\OTPController::class)->group(function(){
    Route::post('/login/otp/generate', 'loginOtpGenerate')->name('otp.loginOtpGenerate');
    Route::get('/otp/verification/{user_id}/{email}/{password}', 'verification')->name('otp.verification');
});
    Route::get('/reset-password/otp/verify/{token}/{email}/{password}', [\App\Http\Controllers\Auth\NewPasswordController::class, 'passwordResetOtpVerification'])
            ->name('reset-password.otp-verify');
    Route::post('/reset-password/otp', [\App\Http\Controllers\Auth\NewPasswordController::class, 'OtpNotification'])->name('reset-password.otp');
    Route::resource('enquires', EnquiresController::class);
    Route::controller(Controller::class)->group(function(){
        Route::get('/home', 'home')->name('home');
        Route::get('/about-us', 'aboutUs')->name('aboutUs');
        Route::get('/faq', 'faq')->name('faq');
        Route::get('/contact-us', 'contactUs')->name('contactUs');
        Route::get('/vehicles', 'vehicles')->name('vehicles');
        Route::get('/nissan-kicks-detail', 'secondVehicleDetail')->name('vehicle-detail-nissan-kicks');
        Route::get('/kia-k5-detail', 'kiaK5VehicleDetail')->name('vehicle-detail-kia-k5');

        Route::get('/details', 'details')->name('details');
        Route::get('/picantodetails', 'picantodetails')->name('picantodetails');
        Route::get('/chevroletdetails', 'chevroletdetails')->name('chevroletdetails');
        Route::post('/subscriptions','subscriptions')->name('subscriptions');
       Route::get('subscriptions', 'subscriptionsListing')->name('subscriptions.index');

    });
    Route::resource('contacts', ContactController::class);
    Route::get('/header', function () {
        return view('layouts.header');
    });

