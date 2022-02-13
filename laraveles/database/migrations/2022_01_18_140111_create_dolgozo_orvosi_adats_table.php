<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDolgozoOrvosiAdatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dolgozo_orvosi_adats', function (Blueprint $table) {
            $table->id();
            //$table->foreign('dolgozo_id')->references('id')->on('dolgozos');
            $table->boolean('tartosbeteg');
            //$table->boolean('egeszsegugyi_konyv');
            //$table->string('dokumentum');
            $table->date('ervenyeseg_kezd');
            $table->date('ervenyeseg_veg');
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
        Schema::dropIfExists('dolgozo_orvosi_adats');
    }
}
