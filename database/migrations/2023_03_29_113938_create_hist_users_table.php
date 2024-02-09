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
        Schema::create('hist_users', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('rank');
            $table->integer('userID')->index('userID');
            $table->string('user', 30);
            $table->bigInteger('reputation');
            $table->string('bestSoft', 50);
            $table->float('bestSoftVersion', 10, 0);
            $table->string('clanName', 30);
            $table->integer('age');
            $table->double('timePlaying');
            $table->double('bitcoinSent')->unsigned();
            $table->unsignedInteger('spamSent');
            $table->float('warezSent', 10, 0)->unsigned();
            $table->unsignedInteger('profileViews');
            $table->unsignedInteger('researchCount');
            $table->integer('missionCount');
            $table->integer('hackCount');
            $table->integer('ddosCount');
            $table->integer('ipResets');
            $table->bigInteger('moneyEarned');
            $table->bigInteger('moneyTransfered');
            $table->bigInteger('moneyHardware');
            $table->bigInteger('moneyResearch');
            $table->tinyInteger('round');

            $table->unique(['userID', 'round'], 'userID_2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hist_users');
    }
};
