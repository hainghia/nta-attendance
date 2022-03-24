<?php

use App\Http\Controllers\Web\Private\LoginController;
use App\Http\Controllers\Web\Public\Home\HomeController;
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

/**
 * Public Route
 */

/* Pages Hom */
Route::get('/', [HomeController::class, 'index']);

/* Pages Login */
Route::get('/admin/users/login', [LoginController::class, 'index'])->name('login');
Route::post('/admin/users/login/store', [LoginController::class, 'store']);

Route::controller(LoginController::class)->group(function () {
  Route::get('/orders/{id}', 'show');
  Route::post('/orders', 'store');
});
