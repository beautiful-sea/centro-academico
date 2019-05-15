<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsHasOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_has_options', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_product');
            $table->unsignedBigInteger('id_option');

            $table->foreign('id_product')
                    ->references('id')->on('products')
                    ->onDelete('cascade');

            $table->foreign('id_option')
                    ->references('id')->on('products_options')
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
        Schema::dropIfExists('products_has_options');
    }
}
