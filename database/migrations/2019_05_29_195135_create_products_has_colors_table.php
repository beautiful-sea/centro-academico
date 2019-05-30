<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsHasColorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_has_colors', function (Blueprint $table) {
            $table->unsignedBigInteger('products_id');
            $table->unsignedBigInteger('colors_id');
            $table->foreign('products_id')->references('id')->on('products')->onDelete('cascade');;
            $table->foreign('colors_id')->references('id')->on('colors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_has_colors');
    }
}
