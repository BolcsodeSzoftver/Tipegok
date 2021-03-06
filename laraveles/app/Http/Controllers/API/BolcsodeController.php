<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\bolcsode;
use App\Models\bolcsode_valtozas;
use App\Models\fenntarto;
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
        $bolcsode = bolcsode::all();
        return response()->json(bolcsode::all());
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

        if ($bolcsode->cim != $request->get('cim')) {
            $b_valtozas = new bolcsode_valtozas();
            $b_valtozas->bolcsode_id = $bolcsode->id;
            $b_valtozas->mezonev =  'cim';
            $b_valtozas->regiertek = $bolcsode->cim;
            $b_valtozas->save();
        }
        if ($bolcsode->nev != $request->get('nev')) {
            $b_valtozas = new bolcsode_valtozas();
            $b_valtozas->bolcsode_id = $bolcsode->id;
            $b_valtozas->mezonev =  'nev';
            $b_valtozas->regiertek = $bolcsode->nev;
            $b_valtozas->save();
        }
        if ($bolcsode->agazati_azon != $request->get('agazati_azon')) {
            $b_valtozas = new bolcsode_valtozas();
            $b_valtozas->bolcsode_id = $bolcsode->id;
            $b_valtozas->mezonev =  'agazati_azon';
            $b_valtozas->regiertek = $bolcsode->agazati_azon;
            $b_valtozas->save();
        }
        if ($bolcsode->szgyf_kod != $request->get('szgyf_kod')) {
            $b_valtozas = new bolcsode_valtozas();
            $b_valtozas->bolcsode_id = $bolcsode->id;
            $b_valtozas->mezonev =  'szgyf_kod';
            $b_valtozas->regiertek = $bolcsode->szgyf_kod;
            $b_valtozas->save();
        }
        if ($bolcsode->ferohelyek_szama != $request->get('ferohelyek_szama')) {
            $b_valtozas = new bolcsode_valtozas();
            $b_valtozas->bolcsode_id = $bolcsode->id;
            $b_valtozas->mezonev =  'ferohelyek_szama';
            $b_valtozas->regiertek = $bolcsode->ferohelyek_szama;
            $b_valtozas->save();
        }
        if ($bolcsode->feor != $request->get('feor')) {
            $b_valtozas = new bolcsode_valtozas();
            $b_valtozas->bolcsode_id = $bolcsode->id;
            $b_valtozas->mezonev =  'feor';
            $b_valtozas->regiertek = $bolcsode->feor;
            $b_valtozas->save();
        }
        if ($bolcsode->agazati_potlek != $request->get('agazati_potlek')) {
            $b_valtozas = new bolcsode_valtozas();
            $b_valtozas->bolcsode_id = $bolcsode->id;
            $b_valtozas->mezonev =  'agazati_potlek';
            $b_valtozas->regiertek = $bolcsode->agazati_potlek;
            $b_valtozas->save();
        }
        if ($bolcsode->fennt_id != $request->get('fennt_id')) {
            $b_valtozas = new bolcsode_valtozas();
            $b_valtozas->bolcsode_id = $bolcsode->id;
            $b_valtozas->mezonev =  'fennt_id';
            $b_valtozas->regiertek = $bolcsode->fennt_id;
            $b_valtozas->save();
        }

        $bolcsode->cim = $request->get('cim');
        $bolcsode->nev = $request->get('nev');
        $bolcsode->agazati_azon = $request->get('agazati_azon');
        $bolcsode->szgyf_kod = $request->get('szgyf_kod');
        $bolcsode->ferohelyek_szama = $request->get('ferohelyek_szama');
        $bolcsode->feor = $request->get('feor');
        $bolcsode->agazati_potlek = $request->get('agazati_potlek');
        $bolcsode->fennt_id = $request->get('fennt_id');
        $bolcsode->bolcsode_admin = $request->get('bolcsode_admin');
        $bolcsode->save();
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
    }

    public function megjelenit()
    {
        $fenntartok = fenntarto::all();
        $jogosults = jogosultsag::all();
        $admin = User::all();
        return view('bolcsiadat', compact('fenntartok', 'jogosults','admin'));
    }


    public function megjeleniFenntartoId()
    {
        $fenntartokId = fenntarto::all();
        $megjelenitAdminNev = User::all();
        return view('ujBolcsi', compact('fenntartokId', 'megjelenitAdminNev'));
    }

    public function fenntartoBolcsode($id)
    {
        $bolcsodek = bolcsode::where('fennt_id', $id)->get();
        return response()->json($bolcsodek);
    }

    public function bolcsi($id)
    {
        $bolcsode = bolcsode::where('bolcsode_admin', $id)->get();
        return response()->json($bolcsode);
    }

    public function fennt($id)
    {
        $fenntarto = fenntarto::where('id', $id)->get();
        return response()->json($fenntarto);
    }
}
