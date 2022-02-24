<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class bolcsode extends Model
{
    use HasFactory;
    use SoftDeletes;
   
    protected $fillable = [
        'fennt_id','cim','nev','agazati_azon','szgyf_kod','ferohelyek_szama','feor','agazati_potlek','bolcsode_admin'
    ];
}
