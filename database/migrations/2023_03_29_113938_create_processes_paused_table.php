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
        Schema::create('processes_paused', function (Blueprint $table) {
            $table->integer('pid')->primary();
            $table->integer('timeLeft');
            $table->timestamp('timePaused')->useCurrentOnUpdate()->useCurrent();
            $table->integer('userID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('processes_paused');
    }
};
