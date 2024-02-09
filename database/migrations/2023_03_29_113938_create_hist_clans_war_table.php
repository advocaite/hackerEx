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
        Schema::create('hist_clans_war', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idWinner');
            $table->unsignedInteger('idLoser');
            $table->unsignedInteger('scoreWinner');
            $table->unsignedInteger('scoreLoser');
            $table->timestamp('startDate')->useCurrentOnUpdate()->useCurrent();
            $table->timestamp('endDate')->default('0000-00-00 00:00:00');
            $table->unsignedInteger('bounty');
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
        Schema::dropIfExists('hist_clans_war');
    }
};
