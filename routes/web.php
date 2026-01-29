<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return view('index');
});

Route::get('/hello', function() {
    return 'hello hamza';
});

Route::get('/blog', function() {
    return view('blog');
});

Route::get('/create', function() {
    return view('create');
});