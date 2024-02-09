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
        Schema::create('missions_seed', function (Blueprint $table) {
            $table->unsignedInteger('missionID')->primary();
            $table->boolean('greeting');
            $table->boolean('intro');
            $table->boolean('victim_call');
            $table->boolean('payment');
            $table->boolean('victim_location');
            $table->boolean('warning');
            $table->boolean('action')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('missions_seed');
    }
};
