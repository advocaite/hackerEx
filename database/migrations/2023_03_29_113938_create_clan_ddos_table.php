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
        Schema::create('clan_ddos', function (Blueprint $table) {
            $table->integer('attackerClan')->index('attackerClan');
            $table->integer('victimClan');
            $table->integer('ddosID');
            $table->boolean('displayAttacker')->default(true);
            $table->boolean('displayVictim')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clan_ddos');
    }
};
