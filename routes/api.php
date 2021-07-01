<?php
use App\Http\Controllers\Auth;
use App\Http\Controllers\SetController;
use App\Http\Controllers\Auth\LoginController as LoginController;
use App\Http\Controllers\Auth\LogoutController as LogoutController;
use App\Http\Controllers\Auth\RegisterController as RegisterController;
use App\Http\Controllers\CardController as CardController;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

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
//public routes
Route::post('/login', [LoginController::class, 'login']);
Route::post('/register', [RegisterController::class, 'register']);

Route::group(['middleware' => ['auth:sanctum']], function ($route) {
    $route->get('/user', [LoginController::class, 'user']);
    $route->post('/logout', [LogoutController::class, 'logout']);
});

Route::get('card', [CardController::class, 'index']);

Route::get('card/{id}', [CardController::class, 'show']);

Route::get('card/set/EldritchMoon', [CardController::class, 'set_EM']);

Route::get('card/set/AetherRevolt', [CardController::class, 'set_AR']);

// Route::get('/sets', [SetController::class, 'show'] );
// Route::get('/{set}/cards', [SetController::class, 'getCards'] );