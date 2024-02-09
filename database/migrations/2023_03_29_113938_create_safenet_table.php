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
        Schema::create('safenet', function (Blueprint $table) {
            $table->bigInteger('IP')->index('IP');
            $table->boolean('reason');
            $table->timestamp('startTime')->default('0000-00-00 00:00:00');
            $table->timestamp('endTime')->default('0000-00-00 00:00:00');
            $table->tinyInteger('count')->default(1);
            $table->boolean('onFBI');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('safenet');
    }
};
