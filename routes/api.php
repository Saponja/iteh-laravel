<?php

use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamController;
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

Route::get('/players', [PlayerController::class, 'index']);
Route::get('/players/{player}', [PlayerController::class, 'show']);
Route::put('/players/{player}', [PlayerController::class, 'update']);
Route::post('/players', [PlayerController::class, 'store']);
Route::delete('/players/{player}', [PlayerController::class, 'destroy']);
Route::get('/players/club/{name}', [PlayerController::class, 'getByClubName']);

Route::resource('teams', TeamController::class);
Route::get('/teams/search/{goaldiff}', [TeamController::class, 'getByGoals']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
