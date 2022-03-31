<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\belepes;
use App\Models\jogosultsag;
use App\Models\User;
use App\Models\alkalmazott;
use Illuminate\Support\Facades\Storage;



class FelhasznaloController extends Controller
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*  $comment = Comment::findOrFail($id);
        return response()->json($comment); */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
        /*  $felhasznalo = User::findOrFail($id);
        $felhasznalo->delete(); */
        $user = User::where('id', $id)->firstorfail()->delete();
        return redirect("/felhasznalo");
    }

    public function megjelenit()
    {
        $alkalmazotts=alkalmazott::all();
        $jogosultsag  = jogosultsag::all();
        $user = User::all();
        return view('felhasznalo', compact('user', 'jogosultsag','alkalmazotts'));
    }
}
