<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFenntartosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fenntartos', function (Blueprint $table) {
            $table->id();
            $table->String('nev');
            $table->String('szekhely');
            $table->Integer('agazati_azon');
            $table->String('kepviselo');
            $table->Integer('adoszam');
            $table->String('megye');
            $table->Integer('cegjegyzekszam')->unique();
            $table->Integer('statisztikaiszam');
            $table->String('illetekes_kormányh');
            $table->Integer('bolcsodek_szama');
            $table->String('uzemorvos_nev');
            $table->String('uzemorvos_cim');
            $table->String('uzemorvos_telefonszam');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fenntartos');
    }
}
