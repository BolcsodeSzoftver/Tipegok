<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBolcsodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bolcsodes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fennt_id');
            $table->foreign('fennt_id')->references('id')->on('fenntartos');
            $table->String('cim');
            $table->String('nev');
            $table->integer('agazati_azon');
            $table->integer('szgyf_kod');
            $table->integer('ferohelyek_szama');
            $table->integer('feor');
            $table->integer('agazati_potlek');
<<<<<<< HEAD
            $table->foreignId('bolcsode_admin')->nullable(true)->references('id')->on('users');
=======
            $table->foreignId('bolcsode_admin')->nullable(true)->references('id')->on('belepes');
>>>>>>> 30fe5fcb5b58b21d7abd65f3fa660a7381879391
            $table->Integer('aktiv');
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
        Schema::dropIfExists('bolcsodes');
    }
}
