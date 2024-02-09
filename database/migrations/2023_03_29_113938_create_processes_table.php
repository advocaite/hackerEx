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
        Schema::create('processes', function (Blueprint $table) {
            $table->integer('pid', true);
            $table->integer('pCreatorID')->index('pCreatorID');
            $table->integer('pVictimID')->index('pVictimID');
            $table->smallInteger('pAction');
            $table->integer('pSoftID');
            $table->string('pInfo', 30);
            $table->text('pInfoStr');
            $table->timestamp('pTimeStart')->default('0000-00-00 00:00:00');
            $table->timestamp('pTimePause')->default('0000-00-00 00:00:00');
            $table->timestamp('pTimeEnd')->default('0000-00-00 00:00:00')->index('pTimeEnd');
            $table->integer('pTimeIdeal');
            $table->integer('pTimeWorked');
            $table->double('cpuUsage');
            $table->double('netUsage');
            $table->boolean('pLocal');
            $table->boolean('pNPC')->index('pNPC');
            $table->boolean('isPaused');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('processes');
    }
};
