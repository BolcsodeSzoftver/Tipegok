<?php

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

Route::get('/', function () {
    return view('bolcsiadat');
})->middleware(['auth']);
Route::get('/felhasznalo', function () {
    return view('felhasznalo');
})->middleware(['auth']);
Route::get('/dolgozo', function () {
    return view('dolgozo');
})->middleware(['auth']);
Route::get('/mellekletek', function () {
    return view('mellekletek');
})->middleware(['auth']);
Route::get('/ujdolgozo', function () {
    return view('ujDolgozo');
})->middleware(['auth']);
Route::get('/ujdolgozo2', function () {
    return view('ujdolgozo2');
})->middleware(['auth']);

Route::get('/ujdolgozo3', function () {
    return view('ujdolgozo3');
})->middleware(['auth']);
Route::get('/ujdolgozo4', function () {
    return view('ujdolgozo4');
})->middleware(['auth']);
Route::get('/fenntarto', function () {
    return view('fenntarto');
})->middleware(['auth']);
Route::get('/belepes', function () {
    return view('belepes');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
