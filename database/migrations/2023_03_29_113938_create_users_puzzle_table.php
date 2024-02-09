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
        Schema::create('users_puzzle', function (Blueprint $table) {
            $table->unsignedInteger('userID')->primary();
            $table->unsignedInteger('puzzleID')->default(0)->index('puzzleID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_puzzle');
    }
};
