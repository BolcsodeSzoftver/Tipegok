<?php

namespace App\Http\Controllers;

use App\Models\alkalmazott;
use App\Models\bolcsode;
use App\Models\jogosultsag;
use Illuminate\Http\Request;


class dolgozoListaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $db = alkalmazott::where('allapot', '0')->count();
        if ($request->keresesDolgozo) {
            $alkalmazotts = alkalmazott::where('nev', 'LIKE', '%' . $request->keresesDolgozo . '%')->paginate(5);
        } else {
            $alkalmazotts = alkalmazott::paginate(5);
        }
        $jogosultsags = jogosultsag::all();
        $bolcsodek = bolcsode::all();
        return view(
            'dolgozo',
            compact('db', 'alkalmazotts', 'jogosultsags', 'bolcsodek')
        );
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
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
