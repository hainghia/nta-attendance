<?php

use App\Http\Controllers\Web\Private\HomeController as PrivateHomeController;
use App\Http\Controllers\Web\Public\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::prefix('/')->group(function () {
  Route::get('/', [HomeController::class, 'index'])->name('home');
  Route::get('/index', [HomeController::class, 'index']);
});



Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
  Route::get('/dashboard', [PrivateHomeController::class, 'index'])->name('dashboard');
});


// Route::middleware([
//   'auth:sanctum',
//   config('jetstream.auth_session'),
//   'verified'
// ])->group(function () {
//   Route::get('/dashboard', function () {
//     return view('dashboard');
//   })->name('dashboard');
// });
