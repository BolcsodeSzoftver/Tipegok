<?php

use App\Models\jogosultsag;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJogosultsagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jogosultsags', function (Blueprint $table) {
            $table->id();
            $table->string('megnevezes');
            $table->softDeletes();
            $table->timestamps();
        });

        $jogosultsag1 = new jogosultsag();
        $jogosultsag2 = new jogosultsag();
        $jogosultsag3 = new jogosultsag();

        $jogosultsag1-> megnevezes = "admin";
        $jogosultsag2-> megnevezes = "szuperadmin";
        $jogosultsag3-> megnevezes = "dolgozo";

        $jogosultsag1->save();
        $jogosultsag2->save();
        $jogosultsag3->save();

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jogosultsags');
    }
}
