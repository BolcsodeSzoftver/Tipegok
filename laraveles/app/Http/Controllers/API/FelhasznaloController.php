<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\jogosultsag;
use App\Models\User;
use App\Models\bolcsode;
use App\Models\alkalmazott;

class FelhasznaloController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $felhasznalo = User::findOrFail($request->id);
        $felhasznalo->name = $request->name;
        $felhasznalo->email = $request->email;
        $felhasznalo->jogosultsag_id = $request->jogosultsag;
        $felhasznalo->save();
        return redirect("/felhasznalo");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::where('id', $id)->firstorfail()->delete();
        return redirect("/felhasznalo");
    }

    public function megjelenit()
    {
        $bolcsodek = bolcsode::all();
        $alkalmazottak = alkalmazott::all();
        $jogosultsagok  = jogosultsag::all();
        $user = User::all();
        return view('felhasznalo', compact('user', 'jogosultsagok','bolcsodek','alkalmazottak'));
    }
}
