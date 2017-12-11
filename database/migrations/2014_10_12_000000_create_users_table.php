<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('id');
            $table->string('name');
            $table->string('facebook_id', 50);
            $table->string('email')->unique()->nullable();
            $table->string('password');
            $table->string('phone', 50)->nullable();
            $table->enum('status', ['1', '2', '3', '4', '5'])->default('1');
            $table->double('balance', 20, 0)->default(0);
            $table->longText('tags');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
