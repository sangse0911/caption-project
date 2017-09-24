<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->text('description');
            $table->integer('admin_id')->unsigned();
            $table->integer('bookself_id')->unsigned();
            $table->integer('status_id')->unsigned();
            $table->string('author', 50);
            $table->string('publishing_company');
            $table->dateTime('publishing_year');
            $table->tinyInteger('republish');
            $table->string('isbn');
            $table->timestamps();

            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('bookself_id')->references('id')->on('bookselfs')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('status_id')->references('id')->on('status')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
