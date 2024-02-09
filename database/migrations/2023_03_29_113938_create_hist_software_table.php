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
        Schema::create('hist_software', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('rank');
            $table->string('softName', 50);
            $table->tinyInteger('softType');
            $table->double('softVersion');
            $table->string('owner', 50);
            $table->integer('ownerID');
            $table->tinyInteger('round');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hist_software');
    }
};
