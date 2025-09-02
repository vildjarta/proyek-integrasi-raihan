<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('login');
    return view('login');
});

Route::get('/home', function () {
    // return view('home');
    return view('home');
});

Route::get('/about', function () {
    // return view('about');
    return view('about');
});