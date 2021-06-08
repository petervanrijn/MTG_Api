<?php

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

Route::get('card', [\App\Http\Controllers\CardController::class, 'index']);

Route::get('card/{id}', [\App\Http\Controllers\CardController::class, 'show']);

Route::get('card/set/EldritchMoon', [\App\Http\Controllers\CardController::class, 'set_EM']);

Route::get('card/set/AetherRevolt', [\App\Http\Controllers\CardController::class, 'set_AR']);