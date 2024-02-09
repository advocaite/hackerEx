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
        Schema::create('hist_clans_current', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('cid')->index('cid');
            $table->string('name', 50);
            $table->string('nick', 4);
            $table->bigInteger('clanIP');
            $table->bigInteger('reputation')->index('reputation');
            $table->tinyInteger('members');
            $table->smallInteger('won');
            $table->smallInteger('lost');
            $table->double('rate');
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
        Schema::dropIfExists('hist_clans_current');
    }
};
