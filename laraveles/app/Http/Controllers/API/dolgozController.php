<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\alkalmazott                  ;

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
        /* $alkalmazott= alkalmazott::all();  */
        return response()->json(alkalmazott::all())  /* and  view('pages.dTabla', compact('alkalmazott')) */ ;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alkalmazott = alkalmazott::findOrFail($id);
        return response()->json($alkalmazott);
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
        $alkalmazott = alkalmazott::findOrFail($id);
        $alkalmazott->szul_nev  = $request->get('szul_nev');
        $alkalmazott->szul_hely   = $request->get('szul_hely');
        $alkalmazott->szul_ido   = $request->get('szul_ido');
        $alkalmazott->anyja_neve   = $request->get('anyja_neve');
        $alkalmazott->adoazon_jel  = $request->get('adoazon_jel');
        $alkalmazott->tajszam  = $request->get('tajszam');
        $alkalmazott->nem  = $request->get('nem');
        $alkalmazott->nev   = $request->get('nev');
        $alkalmazott->banszamla_szam   = $request->get('banszamla_szam');
        $alkalmazott->telefonszam   = $request->get('telefonszam');
        $alkalmazott->allando_lakhely   = $request->get('allando_lakhely');
        $alkalmazott->tartozkodasi_hely   = $request->get('tartozkodasi_hely');
        $alkalmazott->hazas_e   = $request->get('hazas_e');
        $alkalmazott->tizenhat_alatti_gyermek    = $request->get('tizenhat_alatti_gyermek');
        $alkalmazott->all_polgarsag     = $request->get('all_polgarsag');

        
        $alkalmazott->save();
        return response()->json($alkalmazott);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alkalmazott = alkalmazott::findOrFail($id);
        $alkalmazott->delete();

        return response()->json($alkalmazott::all());
    }
}
