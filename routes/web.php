<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
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
    return view('pages.home');
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

//    Route::get('/reset-password', function () {
//        return view('admin.authentication.reset-password');
//    });

    Route::controller(Controller::class)->group(function(){
        Route::get('/home', 'home')->name('home');
        Route::get('/about-us', 'aboutUs')->name('aboutUs');
        Route::get('/faq', 'faq')->name('faq');
        Route::get('/contact-us', 'contactUs')->name('contactUs');
        Route::get('/vehicles', 'vehicles')->name('vehicles');
    });
    Route::resource('contacts', ContactController::class);

