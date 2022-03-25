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
        return false;
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
            "kepviselo" => 'required|digits_between:6,6|numeric',
            "adoszam" => 'required',
            "megye" => 'required|digits_between:4,4|numeric',
            "cegjegyzekszam" => 'required',
            "statisztikaiszam" => 'required',
            "illetekes_kormányh" => 'required',
            "bolcsodek_szama" => 'required|digits_between:4,4|numeric',
            "uzemorvos_nev" => 'required',
            "uzemorvos_cim" => 'required',
            "uzemorvos_telefonszam" => 'required',

        ];
    }

    public function messages()
    {
        return [
            'nev.required' => 'A cím kitöltése kötelező!',
            'szekhely.required'  => 'A név kitöltése kötelező!',
            'agazati_azon.required' => 'A ágazati azonosíró kitöltése kötelező!', 
            'kepviselo.required' => 'A szgyf kód kitöltése kötelező!',
            'adoszam.required' => 'A férőhelyek száma kitöltése kötelező!',
            'megye.required' => 'A feor azonosíó kitöltése kötelező!',
            'cegjegyzekszam.required' => 'A ágazati pótlék kitöltése kötelező!',
            'statisztikaiszam.required' => 'A fenntartó kiválasztása kötelező!',
            'illetekes_kormányh.required' => 'Az admin kiválasztása kötelező!',
            'bolcsodek_szama.required' => 'A feor azonosíó kitöltése kötelező!',
            'uzemorvos_nev.required' => 'A ágazati pótlék kitöltése kötelező!',
            'uzemorvos_cim.required' => 'A fenntartó kiválasztása kötelező!',
            'uzemorvos_telefonszam.required' => 'Az admin kiválasztása kötelező!',
 
        ];
    } 
}
