<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\alkalmazott_bizonyitvany;
use Illuminate\Http\Request;

class BizonyitvanyController extends Controller
{
    public function index()
    {
        return response()->json(alkalmazott_bizonyitvany::all());
    }
}
