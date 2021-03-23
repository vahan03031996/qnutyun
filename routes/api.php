<?php

use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
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

Route::post('me/team', [TeamController::class, 'crateTeam']);
Route::get('getTeam/{id}',[TeamController::class, 'getTeam']);
Route::put('teamUpdate/{id}',[TeamController::class,'teamUpdate']);

Route::post('me/player/{id}', [PlayerController::class, 'cratePlayer']);
Route::get('getPlayer/{id}',[PlayerController::class, 'getPlayer']);
Route::put('playerUpdate/{id}',[PlayerController::class,'teamPlayer']);



