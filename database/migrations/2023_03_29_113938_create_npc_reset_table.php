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
        Schema::create('npc_reset', function (Blueprint $table) {
            $table->integer('npcID')->primary();
            $table->timestamp('nextScan')->useCurrentOnUpdate()->useCurrent()->index('nextScan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('npc_reset');
    }
};
