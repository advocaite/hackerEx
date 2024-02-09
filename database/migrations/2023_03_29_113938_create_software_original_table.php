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
        Schema::create('software_original', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('npcID');
            $table->string('softName', 20);
            $table->integer('softVersion');
            $table->integer('softSize');
            $table->integer('softRam');
            $table->smallInteger('softType');
            $table->boolean('running');
            $table->boolean('licensedTo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('software_original');
    }
};
