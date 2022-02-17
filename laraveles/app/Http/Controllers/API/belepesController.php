<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\belepes;
use Illuminate\Http\Request;
use App\Models\bolcsode;
use App\Models\fenntarto;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\jogosultsag;

class belepesController extends Controller
{
    public function index()
    {
        return response()->json(belepes::all());
    }

    public function megjelenit(){
        $felhasznalok=belepes::all();
        $admin=jogosultsag::all();
        $user=User::all();
        return view('felhasznalo',compact('felhasznalok','admin','user'));
    }
}
