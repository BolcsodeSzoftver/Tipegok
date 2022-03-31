<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class fenntUrlapEllenorzes extends FormRequest
{
    protected $redirect = '/ujFenntarto';

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
            "nev"  => 'required',
            "szekhely" => 'required',
            "agazati_azon" => 'required|between:8,8',
            "kepviselo" => 'required',
            "adoszam" => 'required|digits_between:10,10|numeric',
            "megye" => 'required',
            "cegjegyzekszam" => 'required|digits_between:10,10|numeric',
            "statisztikaiszam" => 'required',
            "illetekes_kormányh" => 'required',
            "bolcsodek_szama" => 'required|digits_between:1,1000|numeric',
            "uzemorvos_nev" => 'required',
            "uzemorvos_cim" => 'required',
            "uzemorvos_telefonszam" => 'required',

        ];
    }

    public function messages()
    {
        return [
            'nev.required' => 'A név kitöltése kötelező!',
            'szekhely.required'  => 'A székhely kitöltése kötelező!',
            'agazati_azon.required' => 'A ágazati azonosíró kitöltése kötelező!', 
            'kepviselo.required' => 'A képviselő kitöltése kötelező!',
            'adoszam.required' => 'A adószám kitöltése kötelező!',
            'megye.required' => 'A megye kitöltése kötelező!',
            'cegjegyzekszam.required' => 'A cégjegyzékszám kitöltése kötelező!',
            'statisztikaiszam.required' => 'A statisztikaiszám kitöltése kötelező!',
            'illetekes_kormányh.required' => 'A illetékes kormányhivatal kitöltése kötelező!',
            'bolcsodek_szama.required' => 'A bölcsödék száma kitöltése kötelező!',
            'uzemorvos_nev.required' => 'A uzemorvos neve kitöltése kötelező!',
            'uzemorvos_cim.required' => 'A uzemorvos címe kitöltése kötelező!',
            'uzemorvos_telefonszam.required' => 'A uzemorvos telefonszáma kitöltése kötelező!',
 
            'agazati_azon.between' => ['string' => 'Az ágazati azonosító 8 karakter hosszúnak kell lennnie.',],
            'adoszam.digits_between' => 'Az adószám 10 karakter hosszúnak kell lennnie.',
            'cegjegyzekszam.digits_between' => 'Az adószám 10 karakter hosszúnak kell lennnie.',
        ];
    } 
}
