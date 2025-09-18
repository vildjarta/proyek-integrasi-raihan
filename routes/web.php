<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postcontroller;

Route::get('/', function () {
    // return view('login');
    return view('login');
});

Route::get('/home', function () {
    // return view('home');
    return view('home');
});

Route::get('/post', function () {
    // return view('post');
    return view('post');
});

Route::get('/about', function () {
    // return view('about');
    return view('about');
});

Route::post('/create-Post', [postcontroller::class, 'createPost']);
