<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('id_product');
            $table->integer('amount');
            $table->integer('unitary_value');
            $table->integer('discount')->nullable();
            $table->timestamps();

            $table->foreign('id')
                  ->references('id')->on('orders')
                  ->onDelete('cascade');

            $table->foreign('id_product')
                      ->references('id')->on('products')
                      ->onDelete('cascade');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_items');
    }
}
