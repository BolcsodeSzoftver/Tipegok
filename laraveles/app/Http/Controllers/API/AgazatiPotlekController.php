<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\agazati_potlek;

class AgazatiPotlekController extends Controller
{
    public function megjelenit()
    {
        $agazatiPotlek  = agazati_potlek::all();
        return view('agazati_potlek_tablazat', compact('agazatiPotlek'));
    }
}
