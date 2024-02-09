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
        Schema::create('users_premium', function (Blueprint $table) {
            $table->unsignedInteger('id')->primary();
            $table->timestamp('boughtDate')->useCurrentOnUpdate()->useCurrent();
            $table->timestamp('premiumUntil')->default('0000-00-00 00:00:00');
            $table->double('totalPaid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_premium');
    }
};
