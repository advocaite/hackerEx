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
        Schema::create('profile', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->boolean('premium');
            $table->boolean('active')->default(false);
            $table->bigInteger('reputation');
            $table->integer('rank');
            $table->date('age');
            $table->float('timePlaying', 10, 0);
            $table->integer('missionCount');
            $table->integer('hackCount');
            $table->smallInteger('ipResets');
            $table->smallInteger('ddosCount');
            $table->double('warezSent');
            $table->bigInteger('spamSent');
            $table->integer('mailSent');
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
        Schema::dropIfExists('profile');
    }
};
