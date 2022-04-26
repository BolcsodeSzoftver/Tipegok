<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBolcsodeValtozasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bolcsode_valtozas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bolcsode_id');
            $table->foreign('bolcsode_id')->references('id')->on('bolcsodes');
            $table->string('mezonev');
            $table->string('regiertek');
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
        Schema::dropIfExists('bolcsode_valtozas');
    }
}
