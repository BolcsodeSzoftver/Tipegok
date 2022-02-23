<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bolcsode extends Model
{
    use HasFactory;
   
    protected $fillable = [
        'fennt_id','cim','nev','agazati_azon','szgyf_kod','ferohelyek_szama','feor','agazati_potlek','bolcsode_admin','aktiv'
    ];
}
