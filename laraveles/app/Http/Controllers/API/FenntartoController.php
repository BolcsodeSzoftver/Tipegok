<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\fenntarto;
use App\Models\fenntarto_valtozas;
use Illuminate\Support\Facades\Storage;
use App\Models\bolcsode;
use App\Models\jogosultsag;


class FenntartoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        return response()->json(fenntarto::all());
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
    }

 
    public function update(Request $request, $id)
    {
        $fenntarto = fenntarto::findOrFail($id);
        
            if($fenntarto-> nev != $request->get('nev')){
                $f_valtozas= new fenntarto_valtozas();
                $f_valtozas->fennt_id = $fenntarto->id;
                $f_valtozas->mezonev =  'nev';
                $f_valtozas->regiertek = $fenntarto-> nev;
                $f_valtozas->save();
            }
            if($fenntarto-> szekhely != $request->get('szekhely')){
                $f_valtozas= new fenntarto_valtozas();
                $f_valtozas->fennt_id = $fenntarto->id;
                $f_valtozas->mezonev =  'szekhely';
                $f_valtozas->regiertek = $fenntarto-> szekhely;
                $f_valtozas->save();
            }
            if($fenntarto-> agazati_azon != $request->get('agazati_azon')){
                $f_valtozas= new fenntarto_valtozas();
                $f_valtozas->fennt_id = $fenntarto->id;
                $f_valtozas->mezonev =  'agazati_azon';
                $f_valtozas->regiertek = $fenntarto-> agazati_azon;
                $f_valtozas->save();
            }
            if($fenntarto-> kepviselo != $request->get('kepviselo')){
                $f_valtozas= new fenntarto_valtozas();
                $f_valtozas->fennt_id = $fenntarto->id;
                $f_valtozas->mezonev =  'kepviselo';
                $f_valtozas->regiertek = $fenntarto-> kepviselo;
                $f_valtozas->save();
            }
            if($fenntarto-> adoszam != $request->get('adoszam')){
                $f_valtozas= new fenntarto_valtozas();
                $f_valtozas->fennt_id = $fenntarto->id;
                $f_valtozas->mezonev =  'adoszam';
                $f_valtozas->regiertek = $fenntarto-> adoszam;
                $f_valtozas->save();
            }
            if($fenntarto-> megye != $request->get('megye')){
                $f_valtozas= new fenntarto_valtozas();
                $f_valtozas->fennt_id = $fenntarto->id;
                $f_valtozas->mezonev =  'megye';
                $f_valtozas->regiertek = $fenntarto-> megye;
                $f_valtozas->save();
            }
            if($fenntarto-> cegjegyzekszam != $request->get('cegjegyzekszam')){
                $f_valtozas= new fenntarto_valtozas();
                $f_valtozas->fennt_id = $fenntarto->id;
                $f_valtozas->mezonev =  'cegjegyzekszam';
                $f_valtozas->regiertek = $fenntarto-> cegjegyzekszam;
                $f_valtozas->save();
            }
            if($fenntarto-> statisztikaiszam != $request->get('statisztikaiszam')){
                $f_valtozas= new fenntarto_valtozas();
                $f_valtozas->fennt_id = $fenntarto->id;
                $f_valtozas->mezonev =  'statisztikaiszam';
                $f_valtozas->regiertek = $fenntarto-> statisztikaiszam;
                $f_valtozas->save();
            }
            if($fenntarto-> illetekes_kormányh != $request->get('illetekes_kormányh')){
                $f_valtozas= new fenntarto_valtozas();
                $f_valtozas->fennt_id = $fenntarto->id;
                $f_valtozas->mezonev =  'illetekes_kormányh';
                $f_valtozas->regiertek = $fenntarto-> illetekes_kormányh;
                $f_valtozas->save();
            }
            if($fenntarto-> bolcsodek_szama != $request->get('bolcsodek_szama')){
                $f_valtozas= new fenntarto_valtozas();
                $f_valtozas->fennt_id = $fenntarto->id;
                $f_valtozas->mezonev =  'bolcsodek_szama';
                $f_valtozas->regiertek = $fenntarto-> bolcsodek_szama;
                $f_valtozas->save();
            }
            if($fenntarto-> uzemorvos_nev != $request->get('uzemorvos_nev')){
                $f_valtozas= new fenntarto_valtozas();
                $f_valtozas->fennt_id = $fenntarto->id;
                $f_valtozas->mezonev =  'uzemorvos_nev';
                $f_valtozas->regiertek = $fenntarto-> uzemorvos_nev;
                $f_valtozas->save();
            }
            if($fenntarto-> uzemorvos_cim != $request->get('uzemorvos_cim')){
                $f_valtozas= new fenntarto_valtozas();
                $f_valtozas->fennt_id = $fenntarto->id;
                $f_valtozas->mezonev =  'uzemorvos_cim';
                $f_valtozas->regiertek = $fenntarto-> uzemorvos_cim;
                $f_valtozas->save();
            }
            if($fenntarto-> uzemorvos_telefonszam != $request->get('uzemorvos_telefonszam')){
                $f_valtozas= new fenntarto_valtozas();
                $f_valtozas->fennt_id = $fenntarto->id;
                $f_valtozas->mezonev =  'uzemorvos_telefonszam';
                $f_valtozas->regiertek = $fenntarto-> uzemorvos_telefonszam;
                $f_valtozas->save();
            }
                    
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
    public function megjelenit(){
        $bolcsodek = bolcsode::all();
        $jogosults=jogosultsag::all();
        return view('fenntarto',compact('bolcsodek','jogosults'));
    }
}
