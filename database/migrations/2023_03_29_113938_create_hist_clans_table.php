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
        Schema::create('hist_clans', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('cid')->index('cid');
            $table->integer('rank');
            $table->string('name', 50);
            $table->string('nick', 4);
            $table->bigInteger('reputation')->index('reputation');
            $table->tinyInteger('members');
            $table->tinyInteger('round');
            $table->integer('won');
            $table->integer('lost');
            $table->float('rate', 10, 0);
            $table->smallInteger('clicks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hist_clans');
    }
};
