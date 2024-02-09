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
        Schema::create('software_external', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->integer('userID')->index('userID');
            $table->string('softName', 50);
            $table->integer('softVersion');
            $table->integer('softSize');
            $table->integer('softRam');
            $table->tinyInteger('softType');
            $table->dateTime('uploadDate');
            $table->integer('licensedTo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('software_external');
    }
};
