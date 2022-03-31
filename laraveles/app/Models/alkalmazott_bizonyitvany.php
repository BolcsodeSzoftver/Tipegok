<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alkalmazott_bizonyitvany extends Model
{
    use HasFactory;
    protected $fillable = ['alkalmazott_id','vegzettseg','biz_intezmeny_nev','kiadas_datuma','bizonyitvany_szam','gyakorlati_igazolás', 'oep_könyv_masolat','pontokszama','dokumentum_feltoltese'];
}
