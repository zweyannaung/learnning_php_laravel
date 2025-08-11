<?php

use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome',[
        'name' => 'Mingalarbar',
        'age' => 20,
        'hobby' => 'Coding'
    ]);
})->name('home');

Route::get('/about', function () {
    return view('about', ['test' => "This is a test on about page"]);
})->name('about');

Route::view('/contact-me', 'contact', ['test' => "This is a test on contact page"])->name('contact');

Route::get('/user/{name}', function ($name) {
    return "hello I'm $name";
})->name('user');

Route::get('/usertwo/{name?}', function ($name = 'Guest') {
    return "hello I'm $name";
})->name('usertwo');
 