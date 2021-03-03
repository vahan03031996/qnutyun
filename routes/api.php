<?php

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


Route::post('me/regista', [UserController::class, 'registr']);
Route::get('userGet/{id}',[UserController::class,'userGet']);
Route::put('userUpdate/{id}',[UserController::class,'userUpdate']);
Route::put('userDelete/{id}',[UserController::class , 'userDelete']);
Route::get('userPaginate',[UserController::class,'userPaginate']);
Route::post('user/post' ,[UserController::class,'userPost']);
Route::post('user/post/{id}',[UserController::class,'userPostDelete']);

