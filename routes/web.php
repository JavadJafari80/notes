<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset']);


Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset']);


Route::get('email/verify', [VerificationController::class, 'show'])->name('verification.notice');
Route::get('email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');
Route::post('email/resend', [VerificationController::class, 'resend'])->name('verification.resend');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/categories', [CategoriesController::class, 'index'])->name('categories');
Route::post('/categories', [CategoriesController::class, 'store'])->name('categories.store');
Route::delete('/categories/{id}', [CategoriesController::class, 'destroy'])->name('categories.destroy');
Route::get('/categories/{id}', [CategoriesController::class, 'edit'])->name('categories.edit');


Route::get('/users', [UserController::class, 'index'])->name('users');
Route::delete('/users/{id}', [UserController::class, 'index'])->name('user.delete');
Route::get('/users/{id}', [UserController::class, 'index'])->name('user.edit');
Route::put('/user/{id}/role', [UserController::class, 'updateRole'])->name('user.updateRole');


Route::get('/setting', [SettingController::class, 'index'])->name('setting');
Route::prefix('Setting')->group(function () {
    Route::post('clearCache', [SettingController::class, 'clearCache'])->name('Setting.clearCache');
    Route::post('runMigrations', [SettingController::class, 'runMigrations'])->name('Setting.runMigrations');
    Route::post('optimizeApp', [SettingController::class, 'optimizeApp'])->name('Setting.optimizeApp');
});
