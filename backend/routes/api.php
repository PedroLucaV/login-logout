<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('/user')->group(function() {
    Route::post('/registar', [UserController::class, 'store']);
});

Route::prefix('/auth')->group(function() {
    Route::post('/login', [AuthController::class, 'login']);
    Route::middleware('auth:sanctum')->group(function() {
        Route::post('/logout', [AuthController::class,'logout']);
        Route::get('/me', [AuthController::class,'me']);
    });
});