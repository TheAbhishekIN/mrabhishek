<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/work', function () {
    return view('work');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/projects', function () {
    return view('projects');
});
