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
        Schema::create('virus_doom', function (Blueprint $table) {
            $table->bigInteger('doomID')->index('doomID');
            $table->bigInteger('doomIP');
            $table->integer('creatorID');
            $table->integer('clanID');
            $table->timestamp('releaseDate')->useCurrentOnUpdate()->useCurrent();
            $table->timestamp('doomDate')->default('0000-00-00 00:00:00');
            $table->boolean('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('virus_doom');
    }
};
