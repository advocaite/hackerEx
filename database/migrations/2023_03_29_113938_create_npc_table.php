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
        Schema::create('npc', function (Blueprint $table) {
            $table->integer('id', true);
            $table->tinyInteger('npcType');
            $table->bigInteger('npcIP')->index('npcIP');
            $table->string('npcPass', 8);
            $table->timestamp('downUntil')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('npc');
    }
};
