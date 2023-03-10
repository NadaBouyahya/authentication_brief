<?php

use App\Http\Controllers\AuthController;
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

Route::get('/login_view', [AuthController::class, 'getView']);

Route::get('/auth/google/redirect', [AuthController::class, 'googleRedirect'])->name('googleRedirect');

Route::get('/auth/google/callback', [AuthController::class, 'googleCallback'])->name('googleCallback');