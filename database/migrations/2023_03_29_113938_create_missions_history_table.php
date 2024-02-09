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
        Schema::create('missions_history', function (Blueprint $table) {
            $table->integer('id', true);
            $table->tinyInteger('type');
            $table->bigInteger('hirer')->index('hirer');
            $table->date('missionEnd')->index('missionEnd');
            $table->integer('prize');
            $table->integer('userID')->index('userID');
            $table->boolean('completed')->index('completed');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('missions_history');
    }
};
