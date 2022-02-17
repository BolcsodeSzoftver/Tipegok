<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\belepes;
use Illuminate\Http\Request;
use App\Models\bolcsode;
use App\Models\fenntarto;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class belepesController extends Controller
{
    public function index()
    {
        return response()->json(belepes::all());
    }

    public function megjelenit(){
        $felhasznalok=belepes::all();
        return view('felhasznalo',compact('felhasznalok'));
    }
}
