<?php

namespace App\Http\Controllers;

use App\Http\Requests\fenntUrlapEllenorzes;
use App\Models\fenntarto;

class UjFenntartoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ujFenntarto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(fenntUrlapEllenorzes $request)
    {
         $fenntarto = new fenntarto();
        $fenntarto->nev = $request->nev;
        $fenntarto->szekhely  = $request->szekhely;
        $fenntarto->agazati_azon  = $request->agazati_azon;
        $fenntarto->kepviselo  = $request->kepviselo;
        $fenntarto->adoszam  = $request->adoszam;
        $fenntarto->megye  = $request->megye;
        $fenntarto->cegjegyzekszam  = $request->cegjegyzekszam;
        $fenntarto->statisztikaiszam   = $request->statisztikaiszam;
        $fenntarto->illetekes_kormányh = $request->illetekes_kormányh;
        $fenntarto->bolcsodek_szama = $request->bolcsodek_szama;
        $fenntarto->uzemorvos_nev  = $request->uzemorvos_nev;
        $fenntarto->uzemorvos_cim   = $request->uzemorvos_cim;
        $fenntarto->uzemorvos_telefonszam   = $request->uzemorvos_telefonszam;
        $fenntarto->save();
        return redirect('/fenntarto'); 
       
    }
}
