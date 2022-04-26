<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDolgozosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dolgozos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bolcsode_id');
            $table->foreign('bolcsode_id')->references('id')->on('bolcsodes');
            $table->unsignedBigInteger('alkalmazott_id')->unique();
            $table->foreign('alkalmazott_id')->references('id')->on('alkalmazotts');
            $table->integer('brutto_alapber');
            $table->integer('heti_munkaora');
            $table->string('besorolas_betu');
            $table->integer('besorolas_szam');
            $table->integer('feor_azon');
            $table->integer('agazati_potlek');
            $table->integer('eves_szabi');
            $table->string('vegzettseg');
            $table->string('kp_utalas');
            $table->string('sz_szakkepzet');
            $table->date('belepesi_nap');
            $table->date('kilepesi_nap')->nullable();
            $table->integer('szgf_kod');
            $table->string('munkakor');
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
        Schema::dropIfExists('dolgozos');
    }
}
