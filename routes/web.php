<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [Dashboard::class, 'index']);
Route::get('/device/{id}', [Dashboard::class, 'show']);
