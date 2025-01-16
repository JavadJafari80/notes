<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\NoteController;
use Illuminate\Support\Facades\Route;

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::post('forgot-password', [AuthController::class, 'forgotPassword']);
Route::post('reset-password', [AuthController::class, 'resetPassword']);
Route::middleware('auth:sanctum')->group(function () {
    Route::get('notes', [NoteController::class, 'index']);
    Route::get('notes/show/{id}', [NoteController::class, 'show']);
    Route::post('notes', [NoteController::class, 'store']);
    Route::put('notes/{id}', [NoteController::class, 'update']);
    Route::get('showProfile', [AuthController::class, 'showProfile']);
    Route::get('updateProfile', [AuthController::class, 'updateProfile']);
});
