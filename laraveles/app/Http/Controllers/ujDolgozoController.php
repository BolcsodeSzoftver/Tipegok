<?php

namespace App\Http\Controllers;

use App\Http\Requests\ujDolgozoUrlapEllenorzes;
use App\Models\alkalmazott;
use App\Models\alkalmazott_bizonyitvany;
use App\Models\bolcsode;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ujDolgozoUrlapEllenorzes $request)
    {
        $ujDolgozo = new alkalmazott();
        $ujDolgozo->bolcsode_id = $request->bolcsodeID;
        $ujDolgozo->users_id = $request->userID;
        $ujDolgozo->szul_nev = $request->szul_nev;
        $ujDolgozo->szul_hely = $request->szul_hely;
        $ujDolgozo->szul_ido = $request->szul_ido;
        $ujDolgozo->anyja_neve = $request->anyja_neve;
        $ujDolgozo->adoazon_jel = $request->adoazon_jel;
        $ujDolgozo->tajszam = $request->tajszam;
        $ujDolgozo->nem = $request->nem;
        $ujDolgozo->nev = $request->nev;
        $ujDolgozo->banszamla_szam = $request->banszamla_szam;
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
        $ujDolgozo->tizenhat_alatti_gyermek = $request->tizenhat_alatti_gyermek;
        $ujDolgozo->all_polgarsag = $request->all_polgarsag;
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
        $ujDolgzoBiznyitvany->gyakorlati_igazolas = json_encode($fileNevek);

        $files =  $request->file('oep_konyv_masolat');
        $fileNevek = array();
        foreach ($files as $file) {
            $name = $file->getClientOriginalName();
            $file = $file->storeAs('dokumentumok', $name);
            array_push($fileNevek, $name);
        }
        $ujDolgzoBiznyitvany->oep_konyv_masolat = json_encode($fileNevek);

        $files =  $request->file('dokumentum_feltoltese');
        $fileNevek = array();
        foreach ($files as $file) {
            $name = $file->getClientOriginalName();
            $file = $file->storeAs('dokumentumok', $name);
            array_push($fileNevek, $name);
        }
        $ujDolgzoBiznyitvany->dokumentum_feltoltese = json_encode($fileNevek);

        $ujDolgozo->save();
        $ujDolgzoBiznyitvany->save();
        Auth::user()->bejelentkezesTiltasa();
       if( Auth::user()->isDolgozo()){
            return  redirect("/sikeresAdatKitoltesDolgozo");
        } 
        return  redirect("/sikeresAdatKitoltes");
    }

}
