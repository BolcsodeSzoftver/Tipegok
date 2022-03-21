<?php

namespace App\Http\Controllers;

use App\Models\alkalmazott;
use App\Models\bolcsode;
use App\Models\User;
use Illuminate\Http\Request;
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
        if (Auth::user()->isEngedejezettBejelentkezo())  {
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
        $ujDolgozo->allando_lakhely = $request->allandoLakhely;
        $ujDolgozo->tartozkodasi_hely = $request->tartozkodasiHely;
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

        $ujDolgozo->save();
        return "sikeres feltöltés";
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
