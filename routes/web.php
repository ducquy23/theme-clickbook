<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/company-careers', function () {
    return view('company-careers');
})->name('company-careers');

Route::get('/customer-stories', function () {
    return view('customer');
})->name('customer-stories');

Route::get('/resources', function () {
    return view('resources');
})->name('resources');

Route::get('/webinars', function () {
    return view('webinars');
})->name('webinars');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');