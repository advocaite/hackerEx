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
        Schema::create('clan_defcon', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('attackerID');
            $table->integer('attackerClanID');
            $table->integer('victimID');
            $table->integer('victimClanID');
            $table->dateTime('attackDate');
            $table->boolean('clanServer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clan_defcon');
    }
};
