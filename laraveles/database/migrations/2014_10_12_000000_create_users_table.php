<?php

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
            $table->string('allapot');
            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();
        });

        $user = new User();
        $user-> name = "szuperAdmin";
        $user->email = "szuperadmin@gmail.com";
        $user->jogosultsag_id = 2;
        $user->allapot = 0;
        $user->password = Hash::make(123);

        $userAdmin = new User();
        $userAdmin-> name = "admin";
        $userAdmin->email = "admin@gmail.com";
        $userAdmin->jogosultsag_id = 1;
        $userAdmin->allapot = 0;
        $userAdmin->password = Hash::make(321);

        $user->save();
        $userAdmin->save();

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
