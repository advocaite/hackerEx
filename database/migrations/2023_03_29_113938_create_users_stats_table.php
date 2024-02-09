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
        Schema::create('users_stats', function (Blueprint $table) {
            $table->integer('uid')->primary();
            $table->dateTime('dateJoined');
            $table->integer('exp');
            $table->string('certifications', 30);
            $table->string('awards', 50);
            $table->float('timePlaying', 10, 0);
            $table->integer('missionCount');
            $table->integer('hackCount');
            $table->integer('ddosCount');
            $table->double('warezSent');
            $table->bigInteger('spamSent');
            $table->double('bitcoinSent')->unsigned();
            $table->integer('ipResets');
            $table->timestamp('lastIpReset')->useCurrent();
            $table->mediumInteger('pwdResets');
            $table->timestamp('lastPwdReset')->default('0000-00-00 00:00:00');
            $table->bigInteger('moneyEarned');
            $table->bigInteger('moneyTransfered');
            $table->bigInteger('moneyHardware');
            $table->bigInteger('moneyResearch');
            $table->integer('profileViews');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_stats');
    }
};
