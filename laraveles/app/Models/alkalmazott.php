<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alkalmazott extends Model
{
    use HasFactory;
    //interfacek, olyan funkciók amiket lehet végezni az adott osztályon
    public function felvesz($bolcsi)
    {
        //adat be illesztés, funkció letesztelésére
        $this->belepes_id = 10;
        $this->szul_nev= 'kis pista';
        $this->szul_hely = 'Budapest';
        $this->szul_ido = '1999.01.02';
        $this->anyja_neve = 'Marika';
        $this->adoazon_jel = 1111111;
        $this->tajszam = 1111111;
        $this->nem = 'férfi';
        $this->nev = 'pista';
        $this->banszamla_szam = 1111111111111;
        $this->telefonszam = 1111111111;
        $this->allando_lakhely ="Budapest akac utca 11";
        $this->tartozkodasi_hely ="Budapest akac utca 11";
        $this->hazas_e = 'igen';
        $this->tizenhat_alatti_gyermek = 2;
        $this->all_polgarsag = 'magyar';
        $this->nev = 'pista';
        $this->save();
    }

    public function modosit()
    {
    }
    public function torol()
    {
    }
}
