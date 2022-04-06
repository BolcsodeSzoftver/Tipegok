<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\alkalmazott;
use Illuminate\Support\Facades\DB;
use App\Models\dolgozo;
use App\Models\jogosultsag;
use App\Models\bolcsode;
use Illuminate\Support\Facades\Auth;


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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
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
        $dolgozo->agazati_potlek   = $request->agazataiPotlek;
        $dolgozo->eves_szabi   = $request->evesSzabi;
        $dolgozo->vegzettseg   = $request->vegzettseg;
        $dolgozo->sz_szakkepzet  = $request->szSzakkepzet;
        $dolgozo->belepesi_nap   = $request->belepes;
        $dolgozo->kilepesi_nap   = $request->kilepes;
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*   $alkalmazott = alkalmazott::findOrFail($id);
        return response()->json($alkalmazott); */
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /*  $alkalmazotts = alkalmazott::find($id);
        return view('dolgozo', compact('alkalmazotts', 'id')); */
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
        /*    if ($request->input('submit') === 'Save') {
            $alkalmazottJovahagyas = alkalmazott::findOrFail($id);
            $alkalmazottJovahagyas->allapot = $request->allapot;
            $alkalmazottJovahagyas->save();
            return redirect("/dolgozo");
        }

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
        $alkalmazott->all_polgarsag     = $request->allPorg; */

        $dolgozoAdat=dolgozo::all();
        $dolgozo = dolgozo::findOrFail($request->id);
        $dolgozo->brutto_alapber = $request->brutto_alapber;
        $dolgozo->heti_munkaora = $request->heti_munkaora;
        $dolgozo->besorolas_betu = $request->besorolas_betu;
        $dolgozo->besorolas_szam = $request->besorolas_szam;
        $dolgozo->feor_azon = $request->feor_azon;
        $dolgozo->agazati_potlek = $request->agazati_potlek;
        $dolgozo->eves_szabi = $request->eves_szabi;
        $dolgozo->szgf_kod = $request->szgf_kod;
        $dolgozo->munkakor = $request->munkakor;
        $dolgozo->vegzettseg = $request->vegzettseg;
        $dolgozo->kp_utalas = $request->kp_utalas;
        $dolgozo->sz_szakkepzet = $request->sz_szakkepzet;

        if ($request->kezpenz) {
            $dolgozo->kp_utalas   = $request->kezpenz;
        } elseif ($request->utalas) {
            $dolgozo->kp_utalas   = $request->utalas;
        }

        $dolgozo->save();
        /*  $alkalmazott->save(); */
        return redirect("/dolgozo",compact("dolgozoAdat"));
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
