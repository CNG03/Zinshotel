<?php

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
    return view('login_sign-up');
});

Route::get('/service', function () {
    return view('service');

});
Route::get('/booking-confirmation', function () {
    return view('booking-confirmation');
});

Route::get('home', function () {
    return view('home');
});

Route::get('example', function () {
    return view('web-example');
});

Route::get('our-rooms', function () {
    return view('our-rooms');
});


Route::get('about', function () {
    return view('about-hotel');
});