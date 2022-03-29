<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\dolgozo;


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
        $dolgozo=dolgozo::findOrFail($request->id);
        $dolgozo->brutto_alapber=$request->brutto_alapber;
        $dolgozo->heti_munkaora=$request->heti_munkaora;
        $dolgozo->besorolas_betu=$request->besorolas_betu;
        $dolgozo->besorolas_szam=$request->besorolas_szam;
        $dolgozo->feor_azon=$request->feor_azon;
        $dolgozo->agazati_potlek=$request->agazati_potlek;
        $dolgozo->eves_szabi=$request->eves_szabi;
        $dolgozo->vegzettseg=$request->vegzettseg;
        $dolgozo->kp_utalas=$request->kp_utalas;
        $dolgozo->sz_szakkepzet=$request->sz_szakkepzet;
        $dolgozo->save(); 

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
        
    }
}
