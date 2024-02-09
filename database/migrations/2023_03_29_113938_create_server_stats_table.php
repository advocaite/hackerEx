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
        Schema::create('server_stats', function (Blueprint $table) {
            $table->boolean('id')->primary();
            $table->integer('totalUsers');
            $table->integer('activeUsers');
            $table->double('warezSent');
            $table->bigInteger('spamSent');
            $table->integer('mailSent');
            $table->integer('ddosCount');
            $table->integer('hackCount');
            $table->integer('clans');
            $table->bigInteger('timePlaying');
            $table->integer('totalListed');
            $table->integer('totalVirus');
            $table->bigInteger('totalMoney');
            $table->integer('researchCount');
            $table->unsignedBigInteger('researchMoney');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('server_stats');
    }
};
