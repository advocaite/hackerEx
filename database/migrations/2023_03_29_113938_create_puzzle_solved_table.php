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
        Schema::create('puzzle_solved', function (Blueprint $table) {
            $table->unsignedInteger('puzzleID')->index('puzzleID');
            $table->unsignedInteger('userID')->index('userID');
            $table->timestamp('solvedDate')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('puzzle_solved');
    }
};
