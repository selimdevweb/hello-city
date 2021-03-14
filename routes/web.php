<?php
/* sert à importer route */
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about-us', function () {
    return view('about');
});
