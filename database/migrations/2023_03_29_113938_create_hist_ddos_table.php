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
        Schema::create('hist_ddos', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('rank');
            $table->tinyInteger('round');
            $table->integer('attID');
            $table->string('attUser', 35);
            $table->integer('vicID');
            $table->string('vicUser', 35);
            $table->integer('power');
            $table->integer('servers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hist_ddos');
    }
};
