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
        Schema::create('clan_users', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('clanID')->index('clanID');
            $table->integer('userID')->index('userID');
            $table->date('memberSince');
            $table->boolean('authLevel');
            $table->tinyInteger('hierarchy');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clan_users');
    }
};
