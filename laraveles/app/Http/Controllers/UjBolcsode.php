<?php

namespace App\Http\Controllers;

use App\Http\Requests\urlapEllenorzes;
use App\Models\bolcsode;
use App\Models\fenntarto;
use Illuminate\Foundation\Auth\User;

class UjBolcsode extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $fenntartokId = fenntarto::all();
        $megjelenitAdminNev = User::all();
        return view('ujBolcsi', compact('fenntartokId', 'megjelenitAdminNev'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(urlapEllenorzes $request)
    {
        $bolcsode = new bolcsode();
        $bolcsode->cim = $request->cim;
        $bolcsode->nev = $request->nev;
        $bolcsode->agazati_azon = $request->agazati_azon;
        $bolcsode->feor = $request->feor;
        $bolcsode->szgyf_kod = $request->szgyf_kod;
        $bolcsode->ferohelyek_szama = $request->ferohelyek_szama;
        $bolcsode->agazati_potlek = $request->agazati_potlek;
        $bolcsode->fennt_id = $request->fennt_id;
        $bolcsode->bolcsode_admin = $request->bolcsode_admin;
        $bolcsode->save();
        return redirect('/bolcsode');
    }

}
