<?php

namespace App\Http\Requests;

use App\Models\bolcsode;
use Illuminate\Foundation\Http\FormRequest;

class urlapEllenorzes extends FormRequest
{
    protected $redirect = '/ujBolcsi';

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
            "cim"  => 'required',
            "nev" => 'required',
            "agazati_azon" => 'required',
            "szgyf_kod" => 'required',
            "ferohelyek_szama"     => 'required',
            "feor" => 'required',
            "agazati_potlek" => 'required',
            "fennt_id" => 'required',
            "bolcsode_admin" => 'required',

        ];
    }
    public function messages()
    {
        return [
            'cim.required' => 'A cím kitöltése kötelező!',
            'nev.required'  => 'A név kitöltése kötelező!',
            'agazati_azon.required' => 'A ágazati azonosíró kitöltése kötelező!',
            'szgyf_kod.required' => 'A szgyf kód kitöltése kötelező!',
            'ferohelyek_szama.required' => 'A férőhelyek száma kitöltése kötelező!',
            'feor.required' => 'A feor azonosíó kitöltése kötelező!',
            'agazati_potlek.required' => 'A ágazati pótlék kitöltése kötelező!',
            'fennt_id.required' => 'A fenntartó kiválasztása kötelező!',
            'bolcsode_admin.required' => 'Az admin kiválasztása kötelező!',
        ];
    }
}
