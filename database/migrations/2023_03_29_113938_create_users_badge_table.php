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
        Schema::create('users_badge', function (Blueprint $table) {
            $table->integer('userID')->index('userID');
            $table->smallInteger('badgeID');
            $table->tinyInteger('round')->default(0);
            $table->timestamp('dateAdd')->useCurrentOnUpdate()->useCurrent();
            $table->tinyInteger('priority');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_badge');
    }
};
