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
        Schema::create('round_ddos', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('attID')->index('attID');
            $table->string('attUser', 15)->index('attUser');
            $table->integer('vicID')->index('vicID');
            $table->integer('power')->index('power');
            $table->integer('servers');
            $table->timestamp('date')->useCurrentOnUpdate()->useCurrent();
            $table->boolean('vicNPC');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('round_ddos');
    }
};
