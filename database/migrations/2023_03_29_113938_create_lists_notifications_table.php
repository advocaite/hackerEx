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
        Schema::create('lists_notifications', function (Blueprint $table) {
            $table->integer('userID')->index('userID');
            $table->bigInteger('ip');
            $table->boolean('notificationType');
            $table->string('virusName', 30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lists_notifications');
    }
};
