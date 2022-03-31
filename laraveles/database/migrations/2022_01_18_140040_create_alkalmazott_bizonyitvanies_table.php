<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlkalmazottBizonyitvaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alkalmazott_bizonyitvanies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('alkalmazott_id');
            $table->foreign('alkalmazott_id')->references('id')->on('alkalmazotts');
            $table->string('vegzettseg');
            $table->string('biz_intezmeny_nev');
            $table->date('kiadas_datuma');
            $table->integer('bizonyitvany_szam');
            $table->string('gyakorlati_igazolas');
            $table->string('oep_konyv_masolat');
            $table->integer('pontokszama');
            $table->string('dokumentum_feltoltese');
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
        Schema::dropIfExists('alkalmazott_bizonyitvanies');
    }
}
