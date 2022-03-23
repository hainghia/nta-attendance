<?php

use App\Http\Controllers\Web\Authentication\LoginController;
use App\Http\Controllers\Web\Authentication\RegisterController;
use App\Http\Controllers\Web\Private\HomeController as PrivateHomeController;
use App\Http\Controllers\Web\Public\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::prefix('/')->group(function () {
  Route::controller(LoginController::class)->group(function () {
    Route::get('/', 'create')->name('home');
    Route::get('/index', 'create')->name('index');
    Route::get('/login', 'create')->name('login');
    Route::post('/login/store', 'store')->name('login.store');
  });
  Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'create')->name('register');
    Route::post('/register/store', 'store')->name('register.store');
  });
});

/*
|--------------------------------------------------------------------------
| Private Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {
  Route::prefix('admin')->group(function () {
    Route::get('/', [PrivateHomeController::class, 'index'])->name('admin');
    Route::get('/index', [PrivateHomeController::class, 'index']);
  });
});
