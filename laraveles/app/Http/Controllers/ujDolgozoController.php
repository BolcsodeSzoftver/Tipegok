<?php

namespace App\Http\Controllers;

use App\Models\alkalmazott;
use App\Models\alkalmazott_bizonyitvany;
use App\Models\bolcsode;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input;

class ujDolgozoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->regisztralFelhasznalo()) {
            return redirect('');
        }
        if (Auth::user()->isDolgozo() || Auth::user()->isSzuperAdmin() || Auth::user()->isAdmin()) {
            $userID = User::all();
            $bolcsiID = bolcsode::all();
            return view('ujdolgozo', compact("userID", "bolcsiID"));
        }
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
        $ujDolgozo = new alkalmazott();
        $ujDolgozo->bolcsode_id = $request->bolcsodeID;
        $ujDolgozo->users_id = $request->userID;
        $ujDolgozo->szul_nev = $request->szulNev;
        $ujDolgozo->szul_hely = $request->szulHely;
        $ujDolgozo->szul_ido = $request->szulIdo;
        $ujDolgozo->anyja_neve = $request->anyjaNeve;
        $ujDolgozo->adoazon_jel = $request->adoazonJel;
        $ujDolgozo->tajszam = $request->tajszam;
        $ujDolgozo->nem = $request->nem;
        $ujDolgozo->nev = $request->nev;
        $ujDolgozo->banszamla_szam = $request->bakszamlaSzam;
        $ujDolgozo->telefonszam = $request->telefonszam;

        $allandoLakhely = $request->varos;
        $allandoLakhely .= " ";
        $allandoLakhely .= $request->utca;
        $allandoLakhely .= " ";
        $allandoLakhely .= $request->iranyitoSzam;
        $ujDolgozo->allando_lakhely = $allandoLakhely;

        $tartozkodasiHely = $request->varosTart;
        $tartozkodasiHely .= " ";
        $tartozkodasiHely .= $request->utcaTart;
        $tartozkodasiHely .= " ";
        $tartozkodasiHely .= $request->iranyitoSzamTart;
        $ujDolgozo->tartozkodasi_hely = $tartozkodasiHely;

        $ujDolgozo->hazas_e = $request->hazas;
        $ujDolgozo->tizenhat_alatti_gyermek = $request->tizenhatAlattiGyermek;
        $ujDolgozo->all_polgarsag = $request->allPolgarsag;
        $ujDolgozo->allapot = $request->allapot;

        if ($request->ferfi) {
            $ujDolgozo->nem   = $request->ferfi;
        } elseif ($request->no) {
            $ujDolgozo->nem   = $request->no;
        }

        if ($request->igen) {
            $ujDolgozo->hazas_e   = $request->igen;
        } elseif ($request->nem) {
            $ujDolgozo->hazas_e   = $request->nem;
        }
        $ujDolgzoBiznyitvany = new alkalmazott_bizonyitvany();
        $ujDolgzoBiznyitvany->alkalmazott_id = $request->userID;
        $ujDolgzoBiznyitvany->vegzettseg = $request->vegzettseg;
        $ujDolgzoBiznyitvany->biz_intezmeny_nev = $request->biz_intezmeny_nev;
        $ujDolgzoBiznyitvany->kiadas_datuma = $request->kiadas_datuma;
        $ujDolgzoBiznyitvany->bizonyitvany_szam = $request->bizonyitvany_szam;
        $ujDolgzoBiznyitvany->pontokszama = $request->pontokszama;
        $ujDolgzoBiznyitvany->gyakorlati_igazolas = $request->gyakorlati_igazolas;
        $ujDolgzoBiznyitvany->oep_konyv_masolat = $request->oep_konyv_masolat;
        $ujDolgzoBiznyitvany->dokumentum_feltoltese     = $request->dokumentum_feltoltese;


        $fileNevek = array();
        $files =  $request->file('gyakorlati_igazolas');
        foreach ($files as $file) {
            $name = $file->getClientOriginalName();
            $file = $file->storeAs('dokumentumok', $name);
            array_push($fileNevek, $name);
        }
        print_r($fileNevek);
        $ujDolgzoBiznyitvany->gyakorlati_igazolas = json_encode($fileNevek);
        $files =  $request->file('oep_konyv_masolat');

        $fileNevek = array();
        foreach ($files as $file) {
            $name = $file->getClientOriginalName();
            $file = $file->storeAs('dokumentumok', $name);
            array_push($fileNevek, $name);
        }
        print_r($fileNevek);
        $ujDolgzoBiznyitvany->oep_konyv_masolat = json_encode($fileNevek);

        $files =  $request->file('dokumentum_feltoltese');

        $fileNevek = array();
        foreach ($files as $file) {
            $name = $file->getClientOriginalName();
            $file = $file->storeAs('dokumentumok', $name);
            array_push($fileNevek, $name);
        }
        print_r($fileNevek);
        $ujDolgzoBiznyitvany->dokumentum_feltoltese = json_encode($fileNevek);

        $ujDolgozo->save();
        $ujDolgzoBiznyitvany->save();
        Auth::user()->bejelentkezesTiltasa();
        return  "sikeres adat kitöltés<br>";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
