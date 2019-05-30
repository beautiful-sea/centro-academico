<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsHasSizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_has_sizes', function (Blueprint $table) {
            $table->unsignedBigInteger('products_id');
            $table->unsignedBigInteger('sizes_id');
            $table->foreign('products_id')->references('id')->on('products')->onDelete('cascade');;
            $table->foreign('sizes_id')->references('id')->on('sizes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_has_sizes');
    }
}
