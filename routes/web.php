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
Route::get('/', [HomeController::class, 'index'])->name('index');

/* Pages Login */
Route::controller(LoginController::class)->group(function () {
  Route::get('/login', 'create');
  Route::post('/login', 'store');
});
