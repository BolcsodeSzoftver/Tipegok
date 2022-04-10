<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\belepes;
use App\Models\jogosultsag;
use App\Models\User;
use App\Models\bolcsode;
use App\Models\alkalmazott;
use Illuminate\Support\Facades\Storage;



class FelhasznaloController extends Controller
{
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
