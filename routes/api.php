<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('card', [\App\Http\Controllers\CardController::class, 'index']);

Route::get('card/{id}', [\App\Http\Controllers\CardController::class, 'show']);

Route::get('card/set/EldritchMoon', [\App\Http\Controllers\CardController::class, 'set_EM']);

Route::get('card/set/AetherRevolt', [\App\Http\Controllers\CardController::class, 'set_AR']);