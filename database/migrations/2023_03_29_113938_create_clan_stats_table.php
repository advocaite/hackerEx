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
        Schema::create('clan_stats', function (Blueprint $table) {
            $table->integer('cid')->primary();
            $table->integer('totalMemberPower');
            $table->integer('averageMemberPower');
            $table->integer('averageMemberRanking');
            $table->integer('totalMoneyEarned');
            $table->integer('averageMoneyEarned');
            $table->smallInteger('servers');
            $table->integer('members');
            $table->integer('pageClicks');
            $table->integer('won');
            $table->integer('lost');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clan_stats');
    }
};
