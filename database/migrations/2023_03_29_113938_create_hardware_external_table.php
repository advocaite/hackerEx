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
        Schema::create('hardware_external', function (Blueprint $table) {
            $table->integer('serverID', true)->unique('serverID');
            $table->integer('userID')->index('userID');
            $table->string('name', 15);
            $table->integer('size')->default(100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hardware_external');
    }
};
