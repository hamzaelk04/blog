<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ControllerPost;
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

// Route::post('/create', function() {
//     return 'hello hamza';
// })->name('posts.store');

Route::post('/create', [ControllerPost::class, 'store'])->name('posts.store');