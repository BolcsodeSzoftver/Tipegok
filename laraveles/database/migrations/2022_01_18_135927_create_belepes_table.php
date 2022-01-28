<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

class CreateBelepesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('belepes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jogosultsag_id');
            $table->foreign('jogosultsag_id')->references('id')->on('jogosultsags');
            $table->string('felhasznalo_nev');
            $table->string('email');
            $table->string('jelszo');
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
        Schema::dropIfExists('belepes');
    }
}
