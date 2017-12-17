<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('book_id')->unsigned();
            $table->integer('order_id')->unsigned();
            $table->integer('quantity');
            $table->double('total_price', 20, 0);
            $table->integer('fee')->default(0);
            $table->integer('discount')->default(0);
            $table->timestamps();

            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_orders');
    }
}
