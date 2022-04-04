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
            "szul_ido" => 'required',
            "anyja_neve" => 'required',
            "adoazon_jel" => 'required|digits:10',
            "tajszam" => 'required|digits:9',
            "nev" => 'required',
            "banszamla_szam" => 'required',
            "telefonszam" => 'required|regex:/D*(^([0-9\(\)\/\+ \-]*)$)$/|between:14,15',
            "allando_lakhely" => 'required',
            "tartozkodasi_hely" => 'required',
            "tizenhat_alatti_gyermek" => 'required',
            "all_polgarsag" => 'required',

            //alkalmazott_bizonyitvány tábla
            "vegzettseg"  => 'required',
            "biz_intezmeny_nev" => 'required',
            "kiadas_datuma" => 'required',
            "bizonyitvany_szam" => 'required',
            "pontokszama" => 'required',
        ];
    }

    public function messages()
    {
        return [
            'szul_nev.required' => 'A születési név kitöltése kötelező!',
            'szul_hely.required'  => 'A születési hely kitöltése kötelező!',
            'szul_ido.required' => 'A születési idő kitöltése kötelező!',
            'anyja_neve.required' => 'A anyja neve kitöltése kötelező!',
            'adoazon_jel.required' => 'A adó azonosító kitöltése kötelező!',
            'tajszam.required' => 'A tajszám kitöltése kötelező!',
            'nem.required' => 'A nem kiválasztása kötelező!',
            'nev.required' => 'A név kitöltése kötelező!',
            'banszamla_szam.required' => 'A bankszámla szám kitöltése kötelező!',
            'telefonszam.required' => 'A telefonszám kitöltése kötelező!',
            'allando_lakhely.required' => 'A állandó lakhely kitöltése kötelező!',
            'tartozkodasi_hely.required' => 'A tartózkodási hely kitöltése kötelező!',
            'hazas_e.required' => 'A házas kiválasztása kötelező!',
            'tizenhat_alatti_gyermek.required' => 'A 16 éven aluli gyermekek száma kitöltése kötelező!',
            'all_polgarsag.required' => 'Állam polgárság kitöltése kötelező!',

            'vegzettseg.required' => 'A végzettség kitöltése kötelező!',
            'biz_intezmeny_nev.required' => 'A intézmény neve kitöltése kötelező!',
            'kiadas_datuma.required' => 'A kiadás dátuma kitöltése kötelező!',
            'bizonyitvany_szam.required' => 'A bizonyitvány száma kitöltése kötelező!',
            'pontokszama.required' => 'A pontok száma kitöltése kötelező!',

            'telefonszam.between' => [
                'string' => 'A telefon szám 15 karakter hosszúnak kell lennie.',

            ],
            'telefonszam.regex' => 'Az :attribute formátum érvénytelen.',
            'adoazon_jel.digits' => 'Az :attribute :digits számjegynek kell lennie.',
            'tajszam.digits' => 'Az :attribute :digits számjegynek kell lennie.',




        ];
    }
}
