<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/migrate', function () {
    Artisan::call('migrate');
});

Auth::routes();

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


Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
});
