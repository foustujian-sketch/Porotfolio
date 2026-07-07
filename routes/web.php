<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clean', function () {
    return view('clean');
});

Route::get('/creative', function () {
    return view('creative');
});
