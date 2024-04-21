<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/contact', function () {
    return view('contact');
});

//add a route for questions which connected to the questions view from grade 2 to 11
Route::get('/question', function () {
    return view('question');
});
