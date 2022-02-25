<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\belepes;
use Illuminate\Http\Request;
use App\Models\bolcsode;
use App\Models\bolcsode_valtozas;
use App\Models\fenntarto;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\jogosultsag;

class BolcsodeController extends Controller
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
        //Storage::put('bolcsiadat.json', bolcsode::all());
        $bolcsode=bolcsode::all();
        return response()->json(bolcsode::all());
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
        $bolcsode = new bolcsode();
        $bolcsode->cim = $request->cim;
        $bolcsode->nev = $request->nev;
        $bolcsode->agazati_azon = $request->agazatiAzon;
        $bolcsode->feor= $request->feorAzon;
        $bolcsode->szgyf_kod = $request->szgyfKod;
        $bolcsode->ferohelyek_szama = $request->ferohelyekSzama;
        $bolcsode->agazati_potlek = $request->agazatiPotlek;
        $bolcsode->fennt_id = $request->fenntarto;
        $bolcsode->bolcsode_admin = $request->admin;
        $bolcsode->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bolcsode = bolcsode::findOrFail($id);
        return response()->json($bolcsode);
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
        $bolcsode = bolcsode::findOrFail($id);
/*          
        if($bolcsode->cim != $request->get('cim')){
            $b_valtozas= new bolcsode_valtozas();
            $b_valtozas->bolcsode_id = $bolcsode->id;
            $b_valtozas->mezonev =  'cim';
            $b_valtozas->regiertek = $bolcsode->cim;
            $b_valtozas->save();
        }
        if($bolcsode->nev != $request->get('nev')){
            $b_valtozas= new bolcsode_valtozas();
            $b_valtozas->bolcsode_id = $bolcsode->id;
            $b_valtozas->mezonev =  'nev';
            $b_valtozas->regiertek = $bolcsode->nev;
            $b_valtozas->save();
        }
        if($bolcsode->agazati_azon != $request->get('agazati_azon')){
            $b_valtozas= new bolcsode_valtozas();
            $b_valtozas->bolcsode_id = $bolcsode->id;
            $b_valtozas->mezonev =  'agazati_azon';
            $b_valtozas->regiertek = $bolcsode->agazati_azon;
            $b_valtozas->save();
        }
        if($bolcsode->szgyf_kod != $request->get('szgyf_kod')){
            $b_valtozas= new bolcsode_valtozas();
            $b_valtozas->bolcsode_id = $bolcsode->id;
            $b_valtozas->mezonev =  'szgyf_kod';
            $b_valtozas->regiertek = $bolcsode->szgyf_kod;
            $b_valtozas->save();
        }
        if($bolcsode->ferohelyek_szama != $request->get('ferohelyek_szama')){
            $b_valtozas= new bolcsode_valtozas();
            $b_valtozas->bolcsode_id = $bolcsode->id;
            $b_valtozas->mezonev =  'ferohelyek_szama';
            $b_valtozas->regiertek = $bolcsode->ferohelyek_szama;
            $b_valtozas->save();
        }
        if($bolcsode->feor != $request->get('feor')){
            $b_valtozas= new bolcsode_valtozas();
            $b_valtozas->bolcsode_id = $bolcsode->id;
            $b_valtozas->mezonev =  'feor';
            $b_valtozas->regiertek = $bolcsode->feor;
            $b_valtozas->save();
        }
        if($bolcsode->agazati_potlek != $request->get('agazati_potlek')){
            $b_valtozas= new bolcsode_valtozas();
            $b_valtozas->bolcsode_id = $bolcsode->id;
            $b_valtozas->mezonev =  'agazati_potlek';
            $b_valtozas->regiertek = $bolcsode->agazati_potlek;
            $b_valtozas->save();
        }    */            
        
        $bolcsode->cim = $request->get('cim');
        $bolcsode->nev = $request->get('nev');
        $bolcsode->agazati_azon = $request->get('agazati_azon');
        $bolcsode->szgyf_kod = $request->get('szgyf_kod');
        $bolcsode->ferohelyek_szama = $request->get('ferohelyek_szama');
        $bolcsode->feor = $request->get('feor');
        $bolcsode->agazati_potlek = $request->get('agazati_potlek');
        $bolcsode->fennt_id= $request->get('fennt_id');
        $bolcsode->save();
        Storage::put('bolcsiadatValtozas.json', bolcsode::all());
      
        return response()->json($bolcsode);
    }    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bolcsode = bolcsode::findOrFail($id);
        $bolcsode->delete();

        return response()->json($bolcsode::all());
    }

    public function megjelenit(){
        $fenntartok=fenntarto::all();
        $users= User::all();
        $jogosults=jogosultsag::all();
        return view('bolcsiadat',compact('fenntartok','users','jogosults'));
    }


    public function megjeleniFenntartoId()
    {
        $fenntartokId = fenntarto::all();
        $megjelenitAdminNev = User::all();
        return view('ujBolcsi', compact('fenntartokId','megjelenitAdminNev'));
    }

    public function fenntartoBolcsode($id){
        $bolcsodek = bolcsode::where('fennt_id',$id)->get();
        return response()->json($bolcsodek);
    }

    public function bolcsi($id){
        $bolcsode = bolcsode::where('bolcsode_admin',$id)->get();
        return response()->json($bolcsode);
    }
}
