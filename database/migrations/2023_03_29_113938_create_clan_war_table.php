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
        Schema::create('clan_war', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('clanID1');
            $table->integer('clanID2');
            $table->integer('score1');
            $table->integer('score2');
            $table->timestamp('startDate')->default('0000-00-00 00:00:00');
            $table->timestamp('endDate')->default('0000-00-00 00:00:00');
            $table->integer('bounty');

            $table->index(['clanID1', 'clanID2'], 'clanID1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clan_war');
    }
};
