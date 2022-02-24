<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class alkalmazott extends Model
{
    use HasFactory;
    use SoftDeletes;
    //interfacek, olyan funkciók amiket lehet végezni az adott osztályon
    protected $fillable = [
        'users_id','szul_nev','szul_hely',
        'szul_ido','anyja_neve','adoazon_jel',
        'tajszam','nem','nev','banszamla_szam','telefonszam',
        'allando_lakhely','tartozkodasi_hely','hazas_e',
        'tizenhat_alatti_gyermek','all_polgarsag','allapot'
    ];
}
