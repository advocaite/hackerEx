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
        Schema::create('premium_history', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userID')->index('userID');
            $table->dateTime('boughtDate');
            $table->dateTime('premiumUntil');
            $table->double('paid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('premium_history');
    }
};
