<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsHasOptionsTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_has_options_types', function (Blueprint $table) {
            $table->unsignedBigInteger('id_products_options');
            $table->foreign('id_products_options')
                  ->references('id')->on('products_options')
                  ->onDelete('cascade');
            

            $table->unsignedBigInteger('id_products_options_types');
            $table->foreign('id_products_options_types')
                  ->references('id')->on('products_options_types')
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
        Schema::dropIfExists('products_has_options_types');
    }
}
