<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
App\Http\Controllers\EleveController::route();
App\Http\Controllers\FraisController::route();
App\Http\Controllers\OptionController::route();
App\Http\Controllers\PromotionController::route();
App\Http\Controllers\SectionController::route();

