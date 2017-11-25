<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('name', 100);
            $table->string('introduce')->nullable();
            $table->text('description');
            $table->enum('status', ['1', '2', '3', '4', '5', '6', '7'])->default('1');
            $table->enum('kind', ['1', '2', '3'])->default('1');
            $table->string('address');
            $table->string('author', 50)->nullable();
            $table->string('company')->nullable();
            $table->dateTime('year')->nullable();
            $table->tinyInteger('republish');
            $table->string('isbn')->nullable();
            $table->string('slug');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
