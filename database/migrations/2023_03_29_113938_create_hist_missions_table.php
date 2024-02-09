<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hist_missions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('userID')->index('userID');
            $table->tinyInteger('type');
            $table->unsignedInteger('hirerID');
            $table->integer('prize');
            $table->dateTime('missionEnd');
            $table->boolean('completed');
            $table->tinyInteger('round');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hist_missions');
    }
};
