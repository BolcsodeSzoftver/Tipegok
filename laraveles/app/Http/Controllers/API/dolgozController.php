<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\alkalmazott;
use App\Models\agazati_potlek;
use App\Models\dolgozo;

class dolgozController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * -Ezt használjuk az összes megjegyzés lekéréséhez. 
     */
    public function index()
    {
        return response()->json(dolgozo::all());
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /**
     * Az update() metódus hasonló a store() metódushoz, de ahelyett, hogy új megjegyzést hozna létre, először megragadja a meglévő kért megjegyzést
     * a findOrFail($id) paraméterrel. Ezután érvényesíti az új kérést, frissíti a meglévő megjegyzést, 
     * ha a kérelem érvényes, menti az adatbázisba, és visszaküldi a frissített megjegyzést.
     */
    public function update(Request $request, $id)
    {
        $dolgozo = dolgozo::findOrFail($id);
        $dolgozo->brutto_alapber = $request->brutto_alapber;
        $dolgozo->heti_munkaora = $request->heti_munkaora;
        $dolgozo->besorolas_betu = $request->besorolas_betu;
        $dolgozo->besorolas_szam = $request->besorolas_szam;
        $dolgozo->feor_azon = $request->feor_azon;

        $agazatiPotlek = agazati_potlek::findOrFail($id);
        $betu = $request->besorolas_betu;
        $dolgozo->agazati_potlek   = $agazatiPotlek->$betu;


        $dolgozo->eves_szabi = $request->eves_szabi;
        $dolgozo->szgf_kod = $request->szgf_kod;
        $dolgozo->munkakor = $request->munkakor;
        $dolgozo->vegzettseg = $request->vegzettseg;
        $dolgozo->kp_utalas = $request->kp_utalas;
        $dolgozo->save();

        return redirect("/dolgozo");
    }

}
