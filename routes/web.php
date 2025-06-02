<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Tambahan route untuk main.blade.php
Route::get('/main', function () {
    return view('main');
});
