<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class dolgozoUrlapEllenorzes extends FormRequest
{
    protected $redirect = '/dolgozo';
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
            "brutto_alapber"  => 'required',
            "heti_munkaora"  => 'required',
            "besorolas_betu"  => 'required',
            "besorolas_szam	" => 'required|digits_between:1,50|numeric',
            "agazati_potlek"  => 'required',
            "eves_szabi"  => 'required',
            "vegzettseg"  => 'required',
            "sz_szakkepzet"  => 'required',
            "belepesi_nap"  => 'required',
            "szgf_kod"  => 'required',
            "munkakor"  => 'required',
        ];
    }

    public function messages()
    {
        return [
            'brutto_alapber.required' => 'kitöltése kötelező!',
            'heti_munkaora.required' => 'kitöltése kötelező!',
            'besorolas_betu.required' => 'kitöltése kötelező!',
            'besorolas_szam.required'  => 'kitöltése kötelező!',
            'agazati_potlek.required'  => 'kitöltése kötelező!',
            'eves_szabi.required'  => 'kitöltése kötelező!',
            'vegzettseg.required'  => 'kitöltése kötelező!',
            'sz_szakkepzet.required'  => 'kitöltése kötelező!',
            'belepesi_nap.required'  => 'kitöltése kötelező!',
            'szgf_kod.required'  => 'kitöltése kötelező!',
            'munkakor.required'  => 'kitöltése kötelező!',

            'besorolas_szam.digits_between' => '1 és 49 közötti szám kell.',
        ];
    } 
}
