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
        Schema::create('software_running', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('softID')->index('softID');
            $table->integer('userID');
            $table->integer('ramUsage');
            $table->boolean('isNPC');

            $table->index(['userID', 'isNPC'], 'userID_isNPC');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('software_running');
    }
};
