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
        Schema::create('hardware', function (Blueprint $table) {
            $table->integer('serverID', true);
            $table->integer('userID');
            $table->string('name', 15);
            $table->float('cpu', 10, 0)->default(500);
            $table->float('hdd', 10, 0)->default(100);
            $table->float('ram', 10, 0)->default(256);
            $table->float('net', 10, 0)->default(1);
            $table->boolean('isNPC')->default(false);

            $table->index(['userID', 'isNPC'], 'IndiceComNPC');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hardware');
    }
};
