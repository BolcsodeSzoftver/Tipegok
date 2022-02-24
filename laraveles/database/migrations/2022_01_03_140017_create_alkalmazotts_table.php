<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlkalmazottsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alkalmazotts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users');
            $table->String('szul_nev');
            $table->String('szul_hely');
            $table->date('szul_ido');
            $table->String('anyja_neve');
            $table->Integer('adoazon_jel');
            $table->Integer('tajszam');
            $table->String('nem');
            $table->String('nev');
            $table->String('banszamla_szam');
            $table->String('telefonszam');
            $table->String('allando_lakhely');
            $table->String('tartozkodasi_hely');
            $table->String('hazas_e');
            $table->String('tizenhat_alatti_gyermek');
            $table->String('all_polgarsag');
            $table->integer('allapot');
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
        Schema::dropIfExists('alkalmazotts');
    }
}
