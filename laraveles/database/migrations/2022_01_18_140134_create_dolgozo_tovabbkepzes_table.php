<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDolgozoTovabbkepzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dolgozo_tovabbkepzes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dolgozo_id');
            $table->foreign('dolgozo_id')->references('id')->on('dolgozos');
            $table->year('kotelezettseg');
            $table->date('datumig');
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
        Schema::dropIfExists('dolgozo_tovabbkepzes');
    }
}
