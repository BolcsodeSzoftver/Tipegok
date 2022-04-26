<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jogosultsag;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\emailKuldes;
use Illuminate\Support\Str;

class FelhasznaloRegisztracioController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->isAdmin() || Auth::user()->isSzuperAdmin()) {
            $jogosultsagok = jogosultsag::all();
            return view('felhasznaloRegisztracio', compact('jogosultsagok'));
        } else {
            return redirect('/');
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);
        $pass = Str::random(8);
        $user = new User();
        $user->name = $request->name;
        $emial = $user->email = $request->email;
        $user->allapot = $request->get('allapot');
        $user->jogosultsag_id = $request->get('Jogosultsag');
        $user->password = Hash::make($pass);
        $user->save();

        $details = [
            'title' => 'Kedves ' . $user->name . ",",
            'body' => 'Felhasználód létrehozása sikeresen megtörtént. További adatok megadása szükséges,
                        ezt a következő linkre kattintva tudod megtenni: http://127.0.0.1:8000/login
            
                        Bejelentkezéshez szükséges adatok:

                        -Email cím: '.$emial.'

                        -jelszó:' . $pass . '
                        ',
            'kuldoNev' => Auth::user()->name
        ];
        Mail::to($user->email)->send(new emailKuldes($details));
        return redirect('/dolgozo');
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
        $user = $request->user();
        if(Hash::check($request->regiJelszo,$user->password)){
            $user->update([
                'password'=>Hash::make($request->ujJelszo)
            ]);
            return redirect('/dolgozo');
        }else{
            return response()->json([
                'password'=>'Nem jó!'
            ]);
        }
    }
}
