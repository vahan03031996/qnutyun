<?php

use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamController;
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

Route::get('crateNewTeam', function () {
    return view('welcome') ;
})->name('crateNewTeam');

Route::post('me/team', [TeamController::class, 'crateTeam'])->name('crateTeam');
Route::get('/', [TeamController::class, 'getTeam'])->name('getTeam');
Route::put('teamUpdate/{id}', [TeamController::class, 'teamUpdate']);

Route::post('me/player/{id}', [PlayerController::class, 'cratePlayer'])->name('cratePlayer');

Route::get('me/cratePlayersTeam/{id}', [PlayerController::class, 'cratePlayersTeam'])->name('cratePlayersTeam');
Route::get('getPlayer/{id}', [PlayerController::class, 'getPlayer'])->name('getPlayer');
Route::put('playerUpdate/{id}', [PlayerController::class, 'teamPlayer']);
