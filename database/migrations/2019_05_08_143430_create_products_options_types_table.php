<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsOptionsTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_options_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_option');
            $table->string('name');
            $table->timestamps();


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
        Schema::dropIfExists('products_options_types');
    }
}
