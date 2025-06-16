<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return "Test";
});

Route::get('/another-test', function () {
    return "Test 2";
});
