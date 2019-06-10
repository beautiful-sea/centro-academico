<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMinutesHasParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('minutes_has_participants', function (Blueprint $table) {
            $table->unsignedBigInteger('minutes_id');
            $table->unsignedBigInteger('participants_id');
            $table->foreign('minutes_id')->references('id')->on('minutes')->onDelete('cascade');
            $table->foreign('participants_id')->references('id')->on('participants_minutes')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('minutes_has_participants');
    }
}
