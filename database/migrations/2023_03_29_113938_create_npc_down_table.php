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
        Schema::create('npc_down', function (Blueprint $table) {
            $table->unsignedInteger('npcID')->primary();
            $table->timestamp('downDate')->useCurrent();
            $table->dateTime('downUntil')->index('downUntil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('npc_down');
    }
};
