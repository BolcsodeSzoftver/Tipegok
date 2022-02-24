<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class fenntarto extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'nev','szekhely','nev','agazati_azon','kepviselo'
        ,'adoszam','megye','cegjegyzekszam','statisztikaiszam'
        ,'illetekes_kormányh','bolcsodek_szama','uzemorvos_nev'
        ,'uzemorvos_cim','uzemorvos_telefonszam'
    ];
}
