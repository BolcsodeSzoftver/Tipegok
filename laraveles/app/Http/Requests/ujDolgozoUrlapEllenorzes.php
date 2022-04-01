<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ujDolgozoUrlapEllenorzes extends FormRequest
{
    protected $redirect = '/ujdolgozo';
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //alkalmazott tábla
            "szul_nev"  => 'required',
            "szul_hely" => 'required',
            "szul_ido" => 'required|between:8,8',
            "anyja_neve" => 'required',
            "adoazon_jel" => 'required|digits_between:10,10|numeric',
            "tajszam" => 'required',
            "nem" => 'required|digits_between:10,10|numeric',
            "nev" => 'required',
            "banszamla_szam" => 'required',
            "telefonszam" => 'required|digits_between:1,1000|numeric',
            "allando_lakhely" => 'required',
            "tartozkodasi_hely" => 'required',
            "hazas_e" => 'required',
            "tizenhat_alatti_gyermek" => 'required',
            "all_polgarsag" => 'required',
            
            //alkalmazott_bizonyitvány tábla
            "vegzettseg"  => 'required',
            "biz_intezmeny_nev" => 'required',
            "kiadas_datuma" => 'required|between:8,8',
            "bizonyitvany_szam" => 'required',
            "gyakorlati_igazolas" => 'required|digits_between:10,10|numeric',
            "oep_konyv_masolat" => 'required',
            "pontokszama" => 'required|digits_between:10,10|numeric',
            "dokumentum_feltoltese" => 'required',
        ];
    }

    public function messages()
    {
        return [
            'szul_nev.required' => 'A cím kitöltése kötelező!',
            'szul_hely.required'  => 'A név kitöltése kötelező!',
            'szul_ido.required' => 'A ágazati azonosíró kitöltése kötelező!', 
            'anyja_neve.required' => 'A szgyf kód kitöltése kötelező!',
            'adoazon_jel.required' => 'A férőhelyek száma kitöltése kötelező!',
            'tajszam.required' => 'A feor azonosíó kitöltése kötelező!',
            'nem.required' => 'A ágazati pótlék kitöltése kötelező!',
            'nev.required' => 'A fenntartó kiválasztása kötelező!',
            'banszamla_szam.required' => 'Az admin kiválasztása kötelező!',
            'telefonszam.required' => 'Az admin kiválasztása kötelező!',
            'allando_lakhely.required' => 'Az admin kiválasztása kötelező!',
            'tartozkodasi_hely.required' => 'Az admin kiválasztása kötelező!',
            'hazas_e.required' => 'Az admin kiválasztása kötelező!',
            'tizenhat_alatti_gyermek.required' => 'Az admin kiválasztása kötelező!',
            'all_polgarsag.required' => 'Az admin kiválasztása kötelező!',

            'vegzettseg.required' => 'A fenntartó kiválasztása kötelező!',
            'biz_intezmeny_nev.required' => 'Az admin kiválasztása kötelező!',
            'kiadas_datuma.required' => 'Az admin kiválasztása kötelező!',
            'bizonyitvany_szam.required' => 'Az admin kiválasztása kötelező!',
            'gyakorlati_igazolas.required' => 'Az admin kiválasztása kötelező!',
            'oep_konyv_masolat.required' => 'Az admin kiválasztása kötelező!',
            'pontokszama.required' => 'Az admin kiválasztása kötelező!',
            'dokumentum_feltoltese.required' => 'Az admin kiválasztása kötelező!'

        ];
    }
}
