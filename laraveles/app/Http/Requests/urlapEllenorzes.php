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
            "agazati_azon" => 'required|between:8,8',
            "szgyf_kod" => 'required|digits_between:6,6|numeric',
            "ferohelyek_szama" => 'required',
            "feor" => 'required|digits_between:4,4|numeric',
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

            'agazati_azon.between' => [
                'string' => 'Az ágazati azonosító 8 karakter hosszúnak kell lennnie.',
  
            ],

            'szgyf_kod.digits_between' => 'Az SZGYF kód 6 karakter hosszúnak kell lennnie.',
            'szgyf_kod.numeric' => 'Az SZGYF kód nem tartalmazhat betűt.', 

            'feor.digits_between' => 'Az FEOR azonosító 4 karakter hosszúnak kell lennnie.',
            'feor.numeric' => 'Az FEOR azonosító nem tartalmazhat betűt.',  
 /*           //szgyf kó
            'szgyf_kod.size' => [
                'numeric' => 'min Az SZGYF kódnak :size karakter hosszúságúnak kell lennie.',             
            ],
            'szgyf_kod.numeric' => 'Az SZGYF kód nem tartalmazhat betűt.', */

/*             //feor azonositó
            'feor.min' => [
                'numeric' => 'Az FEOR azonosítónak :min karakter hosszúságúnak kell lennie.',             
            ],
            'feor.max' => [
                'numeric' => 'Az FEOR azonosítónak :max karakter hosszúságúnak kell lennie.',             
            ],
            'feor.numeric' => 'Az FEOR azonosító nem tartalmazhat betűt.',  */
        ];
    }
    
}
