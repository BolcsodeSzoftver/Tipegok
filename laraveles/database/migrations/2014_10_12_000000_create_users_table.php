<?php

use App\Models\jogosultsag;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->foreignId('jogosultsag_id')->nullable()->references('id')->on('jogosultsags');
            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();
        });

        $user = new User();
        $user-> name = "szuperAdmin";
        $user->email = "szuperadmin@gmail.com";
        $user->jogosultsag_id = 2;
        $user->password = Hash::make(123);
        $user->save();

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
