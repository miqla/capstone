<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Capstone Project",
        'active' => 'home'
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile",
        'active' => 'profile'
    ]);
});

Route::get('/facilities', function () {
    return view('facilities', [
        "title" => "Facilities",
        'active' => 'facilities'
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact",
        'active' => 'contact'
    ]);
});
