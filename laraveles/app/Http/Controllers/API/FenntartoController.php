<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\fenntarto;
use Illuminate\Support\Facades\Storage;
use SebastianBergmann\Environment\Console;

class FenntartoController extends Controller
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
        //Storage::put('fenntarto.json',fenntarto::all());
        return response()->json(fenntarto::all());
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return fenntarto::find($id);
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
    /**
     * Az update() metódus hasonló a store() metódushoz, de ahelyett, hogy új megjegyzést hozna létre, először megragadja a meglévő kért megjegyzést
     * a findOrFail($id) paraméterrel. Ezután érvényesíti az új kérést, frissíti a meglévő megjegyzést, 
     * ha a kérelem érvényes, menti az adatbázisba, és visszaküldi a frissített megjegyzést.
     */
    public function update(Request $request, $id)
    {
        $fenntarto = fenntarto::findOrFail($id);
        $fenntarto->nev = $request->get('nev');
        $fenntarto->szekhely  = $request->get('szekhely');
        $fenntarto->agazati_azon  = $request->get('agazati_azon');
        $fenntarto->kepviselo  = $request->get('kepviselo');
        $fenntarto->adoszam  = $request->get('adoszam');
        $fenntarto->megye  = $request->get('megye');
        $fenntarto->cegjegyzekszam  = $request->get('cegjegyzekszam');
        $fenntarto->statisztikaiszam   = $request->get('statisztikaiszam');
        $fenntarto->illetekes_kormányh = $request->get('illetekes_kormányh');
        $fenntarto->bolcsodek_szama = $request->get('bolcsodek_szama');
        $fenntarto->uzemorvos_nev  = $request->get('uzemorvos_nev');
        $fenntarto->uzemorvos_cim   = $request->get('uzemorvos_cim');
        $fenntarto->uzemorvos_telefonszam   = $request->get('uzemorvos_telefonszam');
        //$fenntarto->fennt_admin  = $request->get('fennt_admin');
        $fenntarto->save();
        Storage::put('fenntartoValtozas.json', fenntarto::all());
        return response()->json($fenntarto);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fenntarto = fenntarto::findOrFail($id);
        $fenntarto->delete();

        return response()->json($fenntarto::all());
    }
    public function expand()
    {
       /*  $tasks=fenntarto::with('bolcsiadat')->get(); */
        return "sziaaaa";
        
    } 

}
