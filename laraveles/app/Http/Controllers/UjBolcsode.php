<?php

namespace App\Http\Controllers;

use App\Http\Requests\urlapEllenorzes;
use App\Models\bolcsode;
use App\Models\fenntarto;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

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
    public function store(urlapEllenorzes $request)
    {
      
      $bolcsode = new bolcsode();

        $bolcsode->cim = $request->cim;
        $bolcsode->nev = $request->nev;
        $bolcsode->agazati_azon = $request->agazatiAzon;
        $bolcsode->feor = $request->feorAzon;
        $bolcsode->szgyf_kod = $request->szgyfKod;
        $bolcsode->ferohelyek_szama = $request->ferohelyekSzama;
        $bolcsode->agazati_potlek = $request->agazatiPotlek;
        $bolcsode->fennt_id = $request->fenntarto;
        $bolcsode->bolcsode_admin = $request->admin;
        $bolcsode->save(); 
        return redirect('/bolcsode');
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
