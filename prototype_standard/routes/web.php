<?php

use App\Http\Controllers\auth_Controller;
use App\Http\Controllers\todosController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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
    return redirect()->route('login');
});

Route::get('/auth/google/redirect', [auth_Controller::class, 'googleRedirect'])->name('googleRedirect');

Route::get('/auth/google/callback', [auth_Controller::class, 'googleCallback'])->name('googleCallback');

Auth::routes();

Route::get('/home', [todosController::class, 'index'])->name('home');
// Route::get('/delete', [todosController::class, 'destroy'])->name('destroy');


Route::resource('/todo', todosController::class);

