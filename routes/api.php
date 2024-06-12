<?php

use App\Http\Controllers\DeviceController;
use App\Http\Controllers\LogController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('devices', DeviceController::class);
Route::apiResource('logs', LogController::class);
