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
        Schema::create('lists', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('userID')->index('userID');
            $table->bigInteger('ip')->index('ip');
            $table->string('user', 8);
            $table->string('pass', 9);
            $table->dateTime('hackedTime');
            $table->bigInteger('virusID')->index('virusID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lists');
    }
};
