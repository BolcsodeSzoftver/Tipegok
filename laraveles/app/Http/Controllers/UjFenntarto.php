<?php

namespace App\Http\Controllers;

use App\Http\Requests\fenntUrlapEllenorzes;
use App\Models\fenntarto;
use Illuminate\Http\Request;

class UjFenntarto extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /*  $fenntarto = fenntarto::all();
        return view('ujFenntarto', compact( 'fenntarto')); */
        return view('ujFenntarto');
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
        //
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
