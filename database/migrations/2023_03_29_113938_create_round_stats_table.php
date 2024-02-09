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
        Schema::create('round_stats', function (Blueprint $table) {
            $table->boolean('id');
            $table->integer('totalUsers');
            $table->integer('activeUsers');
            $table->double('warezSent');
            $table->bigInteger('spamSent');
            $table->double('bitcoinSent')->unsigned();
            $table->integer('mailSent');
            $table->integer('ddosCount');
            $table->integer('hackCount');
            $table->integer('clans');
            $table->bigInteger('timePlaying');
            $table->integer('totalListed');
            $table->integer('totalVirus');
            $table->bigInteger('totalMoney');
            $table->integer('researchCount');
            $table->unsignedInteger('moneyResearch');
            $table->unsignedInteger('moneyHardware');
            $table->unsignedInteger('moneyEarned');
            $table->unsignedInteger('moneyTransfered');
            $table->unsignedInteger('usersClicks');
            $table->unsignedInteger('missionCount');
            $table->unsignedInteger('totalConnections');
            $table->unsignedInteger('totalTasks');
            $table->unsignedInteger('totalSoftware');
            $table->unsignedInteger('totalRunning');
            $table->unsignedInteger('totalServers');
            $table->unsignedInteger('clansWar');
            $table->unsignedInteger('clansMembers');
            $table->unsignedInteger('clansClicks');
            $table->unsignedInteger('onlineUsers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('round_stats');
    }
};
