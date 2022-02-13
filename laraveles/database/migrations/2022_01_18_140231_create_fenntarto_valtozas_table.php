<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFenntartoValtozasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fenntarto_valtozas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fennt_id');
            //$table->foreign('fennt_id')->references('id')->on('fenntartos');
            $table->date('meddig');
            $table->string('regiadmin');
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
        Schema::dropIfExists('fenntarto_valtozas');
    }
}
