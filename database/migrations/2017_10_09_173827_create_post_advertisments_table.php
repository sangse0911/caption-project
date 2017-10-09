<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostAdvertismentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_advertisments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('postInvoice_id')->unsigned();
            $table->string('number');
            $table->timestamps();

            $table->foreign('postInvoice_id')->references('id')->on('post_invoices')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_advertisments');
    }
}
