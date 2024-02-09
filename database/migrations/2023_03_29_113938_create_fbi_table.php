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
        Schema::create('fbi', function (Blueprint $table) {
            $table->bigInteger('ip')->index('ip');
            $table->boolean('reason');
            $table->bigInteger('bounty');
            $table->timestamp('dateAdd')->default('0000-00-00 00:00:00');
            $table->timestamp('dateEnd')->default('0000-00-00 00:00:00');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fbi');
    }
};
