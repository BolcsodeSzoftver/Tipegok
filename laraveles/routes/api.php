<?php

use App\Http\Controllers\API\BolcsodeController;
use App\Http\Controllers\API\dolgozController;
use App\Http\Controllers\API\AlkalmazottController;
use App\Http\Controllers\API\FelhasznaloController;
use App\Http\Controllers\API\FenntartoController;
use App\Http\Controllers\API\BizonyitvanyController;
use App\Http\Controllers\API\AgazatiPotlekController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('bolcsode', BolcsodeController::class);//én
Route::apiResource('fenntarto', FenntartoController::class);
Route::apiResource('dolgozo', dolgozController::class);
Route::apiResource('alkalmazott', AlkalmazottController::class);//én
Route::apiResource('bizonyitvany', BizonyitvanyController::class);
Route::apiResource('felhasznalo', FelhasznaloController::class);//én
Route::apiResource('agazatiPotlek', AgazatiPotlekController::class);

