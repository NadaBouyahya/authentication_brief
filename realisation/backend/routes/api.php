<?php

use App\Http\Controllers\BriefController;
use App\Http\Controllers\TutorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// brief
Route::get('/briefs', [BriefController::class, 'show_brief']);
Route::get('/briefs/{id}', [BriefController::class, 'show_brief_byId']);

Route::post('/briefs', [BriefController::class, 'insert_brief']);

//tutor
Route::get('/tutors', [TutorController::class, 'show_tutors']);
Route::get('/tutors/{id}', [TutorController::class, 'show_tutor_byId']);