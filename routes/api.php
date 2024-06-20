<?php
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ActivityUpdateController;
use App\Http\Controllers\AuthController;

// Authentication Routes
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

// Activity Routes
Route::middleware('auth:sanctum')->group(function () {
    Route::resource('activities', ActivityController::class);
    Route::post('activities/{activity}/update', [ActivityUpdateController::class, 'store']);
    Route::get('activities/{activity}/updates', [ActivityUpdateController::class, 'index']);
});
