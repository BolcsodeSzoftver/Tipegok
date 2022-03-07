<?php

use Illuminate\Support\Facades\Route;
use App\Models\fenntarto;
use App\Http\Controllers\API\BolcsodeController;
use App\Http\Controllers\API\dolgozController;
use App\Http\Controllers\API\belepesController;
use App\Http\Controllers\API\FelhasznaloController;
use App\Http\Controllers\API\FenntartoController;
use App\Http\Controllers\API\MellekletController;
use App\Http\Controllers\dolgozoListaController;
use App\Http\Controllers\felhasznaloRegisztracio;
use App\Http\Controllers\ujDolgozoController;
use App\Mail\yourMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
Route::get('/', [BolcsodeController::class, 'megjelenit'])->middleware(['auth']);
Route::get('/fenntarto', [FenntartoController::class, 'megjelenit'])->middleware(['auth']);
Route::get('/ujBolcsi', [BolcsodeController::class, 'megjeleniFenntartoId'])->middleware(['auth']);
Route::get('/teszt/{id}', [BolcsodeController::class, 'fenntartoBolcsode']);
Route::get('/bolcsi/{id}', [BolcsodeController::class, 'bolcsi']);
Route::get('/fennt/{id}', [BolcsodeController::class, 'fennt']);

Route::get('/melleklet1', [dolgozController::class, 'dolgozoAdatai']);
Route::get('/melleklet1/{id}', [dolgozController::class, 'kivalasztottDolgozo']);
Route::get('/melleklet1', [MellekletController::class,'dolgozoAdatai1']);
Route::get('/melleklet1/{id}', [MellekletController::class,'kivalasztottDolgozo1']); 

Route::get('/melleklet2', [MellekletController::class,'dolgozoAdatai2']);
Route::get('/melleklet2/{id}', [MellekletController::class,'kivalasztottDolgozo2']); 

Route::get('/melleklet3', [MellekletController::class,'dolgozoAdatai3']);
Route::get('/melleklet4', [MellekletController::class,'dolgozoAdatai4']);
Route::get('/melleklet5', [MellekletController::class,'dolgozoAdatai5']);
Route::get('/melleklet6', [MellekletController::class,'dolgozoAdatai6']);

Route::get('/melleklet10', [MellekletController::class,'dolgozoAdatai10']);
Route::get('/melleklet10/{id}', [MellekletController::class,'kivalasztottDolgozo10']);
Route::get('/bizonyitvany/{id}', [MellekletController::class,'kivalasztottDolgozoBizonyitvany']);

Route::resource('/felhasznaloRegisztracio', felhasznaloRegisztracio::class)->middleware(['auth']);
Route::resource('/ujdolgozo', ujDolgozoController::class);
Route::resource('/dolgozo', dolgozoListaController::class)->middleware(['auth']);



Route::get('/mellekletek', function () {
    return view('mellekletek');
})->middleware(['auth']);

Route::get('/fejlesztesAlatt', function () {
    return view('fejlesztesAlatt');
})->middleware(['auth']);
Route::get('/fejlesztesAlatt', function () {
    return view('fejlesztesAlatt');
})->middleware(['auth']);
Route::get('/ujFenntarto', function () {
    return view('ujFenntarto');
})->middleware(['auth']);
Route::get('/belepes', function () {
    return view('belepes');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
