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
        Schema::create('clan_requests', function (Blueprint $table) {
            $table->integer('id', true);
            $table->unsignedInteger('clanID')->index('clanID');
            $table->integer('userID');
            $table->integer('adminID');
            $table->boolean('type');
            $table->dateTime('askedDate');
            $table->text('msg');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clan_requests');
    }
};
