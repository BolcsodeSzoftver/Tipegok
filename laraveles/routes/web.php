<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\BolcsodeController;
use App\Http\Controllers\API\FelhasznaloController;
use App\Http\Controllers\API\FenntartoController;
use App\Http\Controllers\API\MellekletController;
use App\Http\Controllers\API\AgazatiPotlekController;
use App\Http\Controllers\dolgozoListaController;
use App\Http\Controllers\FelhasznaloRegisztracioController;
use App\Http\Controllers\UjBolcsodeController;
use App\Http\Controllers\ujDolgozoController;
use App\Http\Controllers\UjFenntartoController;

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

Route::get('/felhasznalo', [FelhasznaloController::class, 'megjelenit',])->middleware(['auth']);
Route::get('/bolcsode', [BolcsodeController::class, 'megjelenit'])->middleware(['auth']);
Route::get('/fenntarto', [FenntartoController::class, 'megjelenit'])->middleware(['auth']);
Route::get('/agaztatiPotlek', [AgazatiPotlekController::class, 'megjelenit'])->middleware(['auth']);
Route::get('/keresFenntarto/{id}', [BolcsodeController::class, 'fenntartoBolcsode']);
Route::get('/bolcsi/{id}', [BolcsodeController::class, 'bolcsi']);
Route::get('/fennt/{id}', [BolcsodeController::class, 'fennt']);

Route::get('/melleklet1', [MellekletController::class,'dolgozoAdatai1']);
Route::get('/melleklet2', [MellekletController::class,'dolgozoAdatai2']);
Route::get('/melleklet3', [MellekletController::class,'dolgozoAdatai3']);
Route::get('/melleklet4', [MellekletController::class,'dolgozoAdatai4']);
Route::get('/melleklet5', [MellekletController::class,'dolgozoAdatai5']);
Route::get('/melleklet6', [MellekletController::class,'dolgozoAdatai6']);
Route::get('/melleklet10', [MellekletController::class,'dolgozoAdatai10']);
Route::get('/mellekletek', [MellekletController::class, 'megjelenit',])->middleware(['auth']);

Route::get('/alkalmazott/{id}', [MellekletController::class,'kivalasztottAlkalmazott']); 
Route::get('/dolgozo/{id}', [MellekletController::class,'kivalasztottDolgozo']); 
Route::get('/fenntarto/{id}', [MellekletController::class,'kivalasztottFenntarto']);
Route::get('/bizonyitvany/{id}', [MellekletController::class,'kivalasztottDolgozoBizonyitvany']);

Route::resource('/felhasznaloRegisztracio', FelhasznaloRegisztracioController::class)->middleware(['auth']);
Route::resource('/ujdolgozo', ujDolgozoController::class)->middleware(['auth']);
Route::resource('/dolgozo', dolgozoListaController::class)->middleware(['auth']);
Route::resource('/ujBolcsi', UjBolcsodeController::class)->middleware(['auth']);
Route::resource('/ujFenntarto', UjFenntartoController::class)->middleware(['auth']);

Route::get('/', function () {
    return redirect("/bolcsode");
})->name('kezdolap');

Route::get('/belepes', function () {
    return view('belepes');
});
Route::get('/sikeresAdatKitoltes', function () {
    return view('sikeresAdatKitoltes');
});
Route::get('/sikeresAdatKitoltesDolgozo', function () {
    return view('sikeresAdatKitoltesDolgozo');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
