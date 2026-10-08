<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view ('/home','landing.index')->name('home');
Route::view ('/about','landing.about')->name('about');
Route::view ('/services','landing.services')->name('services');
Route::view ('/contact','landing.contact')->name('contact');