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
        Schema::create('missions', function (Blueprint $table) {
            $table->integer('id', true);
            $table->tinyInteger('type');
            $table->boolean('status')->index('status');
            $table->unsignedBigInteger('hirer');
            $table->unsignedBigInteger('victim');
            $table->unsignedBigInteger('info');
            $table->integer('newInfo');
            $table->bigInteger('info2');
            $table->unsignedInteger('newInfo2');
            $table->date('missionStart');
            $table->date('missionEnd');
            $table->integer('prize');
            $table->integer('userID')->index('userID');
            $table->tinyInteger('level');
            $table->timestamp('dateGenerated')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('missions');
    }
};
