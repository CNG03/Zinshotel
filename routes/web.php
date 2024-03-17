<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\Route as RoutingRoute;

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

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [UserController::class, 'loginSignUp'])->name('login_sign-up');
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::post('/login', [UserController::class, 'login'])->name('login');


Route::get('/service', function () {
    return view('service');

})->name('service');

Route::get('/booking-confirmation', function () {
    return view('booking-confirmation');
});
Route::get('search', function () {
    return view('search');
})->name('search');

Route::get('example', function () {
    return view('web-example');
});

Route::get('our-rooms', function () {
    return view('our-rooms');
})->name('our-rooms');


Route::get('about', function () {
    return view('about-hotel');
});

Route::get('penhouse', function () {
    return view('penhouse');
});

Route::get('residence-suite', function () {
    return view('residence-suite');
});