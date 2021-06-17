<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardController as CardController;

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

Route::get('card', [CardController::class, 'index']);

Route::get('card/{id}', [CardController::class, 'show']);

Route::get('card/set/EldritchMoon', [CardController::class, 'set_EM']);

Route::get('card/set/AetherRevolt', [CardController::class, 'set_AR']);