<?php

use Illuminate\Support\Facades\Route;
use App\Models\alkalmazott;
use App\Models\bolcsode;
use App\Models\bolcsode_valtozas;
use Illuminate\Support\Facades\Storage;
use App\Models\fenntarto;

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

Route::get('/bolcsode', function () {
    return view('bolcsiadat');
});
Route::get('/felhasznalo', function () {
    return view('felhasznalo');
});
Route::get('/dolgozo', function () {
    return view('dolgozo');
});
Route::get('/mellekletek', function () {
    return view('mellekletek');
});
Route::get('/ujdolgozo', function () {
    return view('ujDolgozo');
});
Route::get('/ujdolgozo2', function () {
    return view('ujdolgozo2');
});

Route::get('/ujdolgozo3', function () {
    return view('ujdolgozo3');
});
Route::get('/ujdolgozo4', function () {
    return view('ujdolgozo4');
});
Route::get('/fenntarto', function () {
    return view('fenntarto');
});



