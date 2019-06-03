<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_product');
            $table->integer('amount');
            $table->float('unitary_value');
            $table->unsignedBigInteger('sizes_id');
            $table->unsignedBigInteger('colors_id');
            $table->timestamps();


            $table->foreign('sizes_id')->references('id')->on('sizes');
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
        Schema::dropIfExists('stocks');
    }
}
