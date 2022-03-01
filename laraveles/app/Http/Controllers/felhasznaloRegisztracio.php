<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jogosultsag;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules;
use App\Mail\yourMail;
use Illuminate\Support\Str;


class felhasznaloRegisztracio extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        if(Auth::user()->isAdmin() || Auth::user()->isSzuperAdmin()){
            $jogosultsagok = jogosultsag::all();
            return view('felhasznaloRegisztracio', compact('jogosultsagok'));
        }else{
            return redirect('/');
        }
    
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
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            /* 'jogosultsag' => ['required', 'string', 'jogosultsag', 'max:255', 'unique:users'], */
            /* 'password' => ['required', 'confirmed', Rules\Password::defaults()], */
        ]);
        $pass = Str::random(8);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->jogosultsag_id = $request->get('Jogosultsag');
        $user->password = Hash::make($pass);
        $user->save();



        $details = [
            'title' => 'Kedves ' . $user->name . ",",
            'body' => 'Felhasználód létrehozása sikeresen megtörtént. További adatok megadása szükséges,
            ezt a következő linkre kattintva tudod megtenni: TODO<br>
            <br>
            Bejelentkezéshez szükséges adatok:
            <br>
            -felhasználónév:email címed
            <br>-jelszó:' . $pass . '
            ',
            'kuldoNev'=>Auth::user()->name
        ];
        Mail::to($user->email)->send(new yourMail($details));
        return redirect('/dolgozo');
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
        /*   $user = User::findOrFail($id);
        $jogosultsagok = jogosultsag::all();
        return view('felhasznaloRegisztracio', compact('jogosultsagok', 'user')); */
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
