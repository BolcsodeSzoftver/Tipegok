<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\alkalmazott;
use App\Models\bolcsode;
use App\Models\fenntarto;
use App\Models\dolgozo;
use App\Models\alkalmazott_bizonyitvany;

class MellekletController extends Controller
{ 
    public function megjelenit(){
        $alkalmazotts=alkalmazott::all();
        return view('mellekletek',compact('alkalmazotts'));
    }

    public function kivalasztottAlkalmazott($id){
        $alkalmazotts=alkalmazott::where('id',$id)->get();
        return response()->json($alkalmazotts);
    }

    public function kivalasztottDolgozo($id){
        $dolgozo=dolgozo::where('alkalmazott_id',$id)->get();
        return response()->json($dolgozo);
    }

    public function kivalasztottFenntarto($id){
        $bolcsiID=alkalmazott::where('id',$id)->value('bolcsode_id');
        $fenntartoID=bolcsode::where('id',$bolcsiID)->value('fennt_id');
        $fenntarto=fenntarto::where('id', $fenntartoID)->get();
        return response()->json($fenntarto);
    }

    public function kivalasztottDolgozoBizonyitvany($id){
        $bizonyitvany=alkalmazott_bizonyitvany::where('alkalmazott_id',$id)->get();
        return response()->json($bizonyitvany);
    }

    public function dolgozoAdatai1(){
        $alkalmazotts=alkalmazott::all();
        return view('melleklet1', compact('alkalmazotts'));
    }

    public function dolgozoAdatai2(){
        $alkalmazotts=alkalmazott::all();
        return view('melleklet2', compact('alkalmazotts'));
    } 

    public function dolgozoAdatai3(){
        $alkalmazotts=alkalmazott::all();
        return view('/melleklet3', compact('alkalmazotts'));
    } 

    public function dolgozoAdatai4(){
        $alkalmazotts=alkalmazott::all();
        return view('melleklet4', compact('alkalmazotts'));
    } 

    public function dolgozoAdatai5(){
        $alkalmazotts=alkalmazott::all();
        return view('melleklet5', compact('alkalmazotts'));
    } 

    public function dolgozoAdatai6(){
        $alkalmazotts=alkalmazott::all();
        return view('melleklet6', compact('alkalmazotts'));
    } 

    public function dolgozoAdatai10(){
        $alkalmazotts=alkalmazott::all();
        return view('melleklet10', compact('alkalmazotts'));
    }

}
