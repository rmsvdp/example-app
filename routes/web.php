<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/rms', function () {
    return response()->file(public_path('rmsvdp.html'));
});
