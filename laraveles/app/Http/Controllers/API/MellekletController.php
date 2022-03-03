<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\alkalmazott;
use App\Models\bolcsode;
use App\Models\fenntarto;
use App\Models\dolgozo;

class MellekletController extends Controller
{
    public function dolgozoAdatai1(){
        $alkalmazotts=alkalmazott::all();
        return view('melleklet1', compact('alkalmazotts'));
    } 

    public function kivalasztottDolgozo1($id){
        $alkalmazotts=alkalmazott::where('id',$id)->get();
        return response()->json($alkalmazotts);
    }

    public function dolgozoAdatai2(){
        $alkalmazotts=alkalmazott::all();
        return view('melleklet2', compact('alkalmazotts'));
    } 

    public function kivalasztottDolgozo2($id){
        $dolgozo=dolgozo::where('alkalmazott_id',$id)->get();
        return response()->json($dolgozo);
    }

    public function kivalasztottDolgozo10($id){
        $bolcsiID=alkalmazott::where('id',$id)->value('bolcsode_id');
        $fenntartoID=bolcsode::where('id',$bolcsiID)->value('fennt_id');
        $fenntarto=fenntarto::where('id', $fenntartoID)->get();
        return response()->json($fenntarto);
    }

    
}
