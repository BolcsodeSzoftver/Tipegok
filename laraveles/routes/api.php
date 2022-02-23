<?php

use App\Http\Controllers\API\BolcsodeController;
use App\Http\Controllers\API\dolgozController;
use App\Http\Controllers\API\FelhasznaloController;
use App\Http\Controllers\API\FenntartoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\fenntarto;
use App\Models\bolcsode;
use Database\Factories\FenntartoFactory;

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

/**
 * A Route::apiResource() itt létrehozza a megjegyzések létrehozásához, megjelenítéséhez, frissítéséhez és törléséhez szükséges összes útvonalat.
 */
Route::apiResource('bolcsode', BolcsodeController::class);
Route::apiResource('fenntarto', FenntartoController::class);
Route::apiResource('dolgozo', dolgozController::class);
Route::apiResource('felhasznalo', FelhasznaloController::class);
Route::delete('/felhasznalo/{id}', 'FelhasznaloController@destory');
