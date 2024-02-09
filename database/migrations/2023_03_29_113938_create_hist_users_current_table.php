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
        Schema::create('hist_users_current', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('userID')->index('userID');
            $table->string('user', 50);
            $table->bigInteger('reputation')->index('reputation');
            $table->integer('age');
            $table->integer('clanID');
            $table->string('clanName', 50);
            $table->double('timePlaying');
            $table->integer('missionCount');
            $table->integer('hackCount');
            $table->integer('ddosCount');
            $table->integer('ipResets');
            $table->bigInteger('moneyEarned');
            $table->bigInteger('moneyTransfered');
            $table->bigInteger('moneyHardware');
            $table->bigInteger('moneyResearch');
            $table->unsignedInteger('warezSent');
            $table->unsignedInteger('spamSent');
            $table->double('bitcoinSent')->unsigned();
            $table->unsignedInteger('profileViews');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hist_users_current');
    }
};
