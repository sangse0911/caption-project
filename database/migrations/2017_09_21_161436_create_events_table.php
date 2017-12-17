<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('admin_id')->unsigned();
            $table->string('title');
            $table->string('path');
            $table->text('description');
            $table->enum('status', ['0', '1'])->default('0');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('slug');
            $table->timestamps();

            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
