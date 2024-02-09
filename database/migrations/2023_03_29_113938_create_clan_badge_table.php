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
        Schema::create('clan_badge', function (Blueprint $table) {
            $table->integer('clanID')->index('userID');
            $table->smallInteger('badgeID');
            $table->tinyInteger('round')->default(0);
            $table->timestamp('dateAdd')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clan_badge');
    }
};
