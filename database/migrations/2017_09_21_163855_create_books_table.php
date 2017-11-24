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
            $table->string('introduce');
            $table->text('description');
            $table->integer('admin_id')->unsigned();
            $table->integer('bookshelf_id')->unsigned();
            $table->enum('status', ['0', '1', '2', '3', '4', '5', '6', '7'])->default('1');
            $table->double('price')->default(0);
            $table->string('author', 50);
            $table->string('company');
            $table->dateTime('year');
            $table->tinyInteger('republish');
            $table->string('isbn');
            $table->string('slug');
            $table->timestamps();

            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('bookshelf_id')->references('id')->on('bookshelves')->onDelete('cascade')->onUpdate('cascade');
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
