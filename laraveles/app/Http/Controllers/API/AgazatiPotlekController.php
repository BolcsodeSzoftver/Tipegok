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
        $felhasznalo->A = $request->a;
        $felhasznalo->B = $request->b;
        $felhasznalo->C = $request->c;
        $felhasznalo->D = $request->d;
        $felhasznalo->E = $request->e;
        $felhasznalo->F = $request->f;
        $felhasznalo->G = $request->g;
        $felhasznalo->H = $request->h;
        $felhasznalo->I = $request->i;
        $felhasznalo->J = $request->j;
        $felhasznalo->save();
        return redirect("/agazati_potlek_tablazat");
    }

    public function megjelenit()
    {
        $agazatiPotlek  = agazati_potlek::paginate(10);
        return view('agazati_potlek_tablazat', compact('agazatiPotlek'));
    }
}
