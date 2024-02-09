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
        Schema::create('lists_bankaccounts', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('userID');
            $table->integer('bankID');
            $table->integer('bankAcc');
            $table->string('bankPass', 6);
            $table->integer('bankIP');
            $table->dateTime('hackedDate');
            $table->integer('lastMoney');
            $table->dateTime('lastMoneyDate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lists_bankaccounts');
    }
};
