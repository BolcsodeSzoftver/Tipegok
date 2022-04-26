<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\dolgozo;
use App\Models\alkalmazott;
use App\Models\agazati_potlek;


class AlkalmazottController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dolgozo = new dolgozo();
        $dolgozo->bolcsode_id  = $request->bolcsodeId;
        $dolgozo->alkalmazott_id  = $request->alkalmazottId;
        $dolgozo->brutto_alapber  = $request->bruttoAlapber;
        $dolgozo->heti_munkaora   = $request->hetiMunkaOra;
        $dolgozo->besorolas_betu  = $request->besorolasiBetu;
        $dolgozo->besorolas_szam  = $request->besorolasiSzam;
        $dolgozo->feor_azon  = $request->feorAzonosito;

        $agazatiPotlek = agazati_potlek::findOrFail($request->besorolasiSzam);
        $betu = $request->besorolasiBetu;
        $dolgozo->agazati_potlek   = $agazatiPotlek->$betu;

        $dolgozo->eves_szabi   = $request->evesSzabi;
        $dolgozo->vegzettseg   = $request->vegzettseg;
        $dolgozo->sz_szakkepzet  = $request->szSzakkepzet;
        $dolgozo->belepesi_nap   = $request->belepes;
        $dolgozo->szgf_kod   = $request->szgfKod;
        $dolgozo->munkakor   = $request->munkakor;
        if ($request->kezpenz) {
            $dolgozo->kp_utalas   = $request->kezpenz;
        } elseif ($request->utalas) {
            $dolgozo->kp_utalas   = $request->utalas;
        }
        $dolgozo->save();
        $dolgozo->jovahagy();

        return redirect("/dolgozo");
        
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $alkalmazott = alkalmazott::findOrFail($request->id);
        $alkalmazott->szul_nev  = $request->szulN;
        $alkalmazott->szul_hely   = $request->szulH;
        $alkalmazott->szul_ido   = $request->szulI;
        $alkalmazott->anyja_neve   = $request->anyjaNeve;
        $alkalmazott->adoazon_jel  = $request->adoAzon;
        $alkalmazott->tajszam  = $request->tajSz;
        $alkalmazott->nem  = $request->nem;
        $alkalmazott->nev   = $request->nev;
        $alkalmazott->banszamla_szam   = $request->bankSZ;
        $alkalmazott->telefonszam   = $request->tel;
        $alkalmazott->allando_lakhely   = $request->allandoLak;
        $alkalmazott->tartozkodasi_hely   = $request->tartHely;
        $alkalmazott->hazas_e   = $request->hazas;
        $alkalmazott->tizenhat_alatti_gyermek    = $request->tizenhatAGy;
        $alkalmazott->all_polgarsag     = $request->allPorg;

        $alkalmazott->save();
        return redirect("/dolgozo");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        alkalmazott::findOrFail($id)->torol();
        return redirect("/dolgozo");
    }
}
