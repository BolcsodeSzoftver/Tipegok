<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\agazati_potlek;

class AgazatiPotlekController extends Controller
{

    public function update(Request $request, $id)
    {
        $felhasznalo = agazati_potlek::findOrFail($request->id);
        $felhasznalo->eletkor = $request->eletkor;
        $felhasznalo->A = $request->A;
        $felhasznalo->B = $request->B;
        $felhasznalo->C = $request->C;
        $felhasznalo->D = $request->D;
        $felhasznalo->E = $request->E;
        $felhasznalo->F = $request->E;
        $felhasznalo->G = $request->G;
        $felhasznalo->H = $request->H;
        $felhasznalo->I = $request->I;
        $felhasznalo->J = $request->J;
        $felhasznalo->save();
        return redirect("/agazati_potlek_tablazat");
    }

    public function megjelenit()
    {
        $agazatiPotlek  = agazati_potlek::paginate(10);
        return view('agazati_potlek_tablazat', compact('agazatiPotlek'));
    }
}
