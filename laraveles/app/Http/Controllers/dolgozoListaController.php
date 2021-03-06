<?php

namespace App\Http\Controllers;

use App\Models\alkalmazott;
use App\Models\bolcsode;
use App\Models\jogosultsag;
use App\Models\dolgozo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class dolgozoListaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $db = alkalmazott::where('allapot', '0')->where('bolcsode_id',Auth::user()->getBolcsodeId())->count();
        if(Auth::user()->isSzuperAdmin()){
            $db = alkalmazott::where('allapot', '0')->count();
        }
        if ($request->keresesDolgozo) {
            $alkalmazotts = alkalmazott::where('nev', 'LIKE', '%' . $request->keresesDolgozo . '%')->paginate(5);
        } else {
            $alkalmazotts = alkalmazott::paginate(5);
        } 
        $jogosultsags = jogosultsag::all();
        $bolcsodek = bolcsode::all();
        $dolgozok=dolgozo::all();
        return view(
            'dolgozo',
            compact('db', 'alkalmazotts', 'jogosultsags', 'bolcsodek','dolgozok')
        );
    }

}
