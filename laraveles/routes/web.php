<?php

use Illuminate\Support\Facades\Route;
use App\Models\fenntarto;
use App\Http\Controllers\API\BolcsodeController;

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

Route::get('/', [BolcsodeController::class,'megjelenit'])->middleware(['auth']);
Route::get('/teszt/{id}',[BolcsodeController::class, 'fenntartoBolcsode']);
Route::get('/felhasznalo', function () {
    return view('felhasznalo');
})->middleware(['auth']);
Route::get('/ujBolcsi', function () {
    return view('ujBolcsi');
})->middleware(['auth']);
Route::get('/dolgozo', function () {
    return view('dolgozo');
})->middleware(['auth']);
Route::get('/mellekletek', function () {
    return view('mellekletek');
})->middleware(['auth']);

Route::get('/ujDolgozo', function () {
    return view('ujDolgozo');
})->middleware(['auth']);
Route::get('/ujDolgozo2', function () {
    return view('ujdolgozo2');
})->middleware(['auth']);
Route::get('/ujDolgozo3', function () {
    return view('ujdolgozo3');
})->middleware(['auth']);
Route::get('/ujDolgozo4', function () {
    return view('ujdolgozo4');
})->middleware(['auth']);

Route::get('/fenntarto', function () {
    return view('fenntarto');
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

require __DIR__.'/auth.php';
