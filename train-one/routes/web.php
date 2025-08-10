<?php

use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return "I am about";
});

Route::get('/user/{name}', function ($name) {
    return "hello I'm $name";
});

Route::get('/usertwo/{name?}', function ($name = 'Guest') {
    return "hello I'm $name";
});
 