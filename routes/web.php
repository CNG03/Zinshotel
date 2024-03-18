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
Route::get('/logout', [UserController::class, 'logout'])->name('logout');


Route::get('/service', function () {
    return view('service');

})->name('service');

Route::get('/booking-confirmation', function () {
    return view('booking-confirmation');
})->name('bk-room');

Route::get('home', function () {
    return view('home');
})->name('home');

Route::get('example', function () {
    return view('web-example');
});

Route::get('our-rooms', function () {
    return view('our-rooms');
})->name('our-rooms');


Route::get('about', function () {
    return view('about-hotel');
})->name('about');

Route::get('penhouse', function () {
    return view('rooms.penhouse');
})->name('pe');

Route::get('residence-suite', function () {
    return view('rooms.residence-suite');
})->name('rs');

Route::get('serenity-suite', function () {
    return view('rooms.serenity-suite');
})->name('ss');

Route::get('alpine-suite', function () {
    return view('rooms.alpine-suite');
})->name('as');

Route::get('prestige-room', function () {
    return view('rooms.prestige-room');
})->name('pm');

Route::get('deluxe-room', function () {
    return view('rooms.deluxe-room');
})->name('dm');

Route::get('check-out', function () {
    return view('check-out');
})->name('check-out');

Route::get('check-out-info', function () {
    return view('check-out-info');
})->name('co');

Route::get('test-modal', function () {
    return view('test');
})->name('test');