<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/company-careers', function () {
    return view('company-careers');
})->name('company-careers');
