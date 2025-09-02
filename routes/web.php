<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('login');
    return view('login');
});

Route::get('/data', function () {
    // return view('data');
    return view('data');
});

Route::get('/home', function () {
    // return view('home');
    return view('home');
});
