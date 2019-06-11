<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMinutesHasSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('minutes_has_schedules', function (Blueprint $table) {
            $table->unsignedBigInteger('minutes_id');
            $table->unsignedBigInteger('schedules_id');
            $table->foreign('minutes_id')->references('id')->on('minutes')->onDelete('cascade');
            $table->foreign('schedules_id')->references('id')->on('schedule_minutes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('minutes_has_schedules');
    }
}
