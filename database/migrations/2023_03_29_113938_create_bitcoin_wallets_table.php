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
        Schema::create('bitcoin_wallets', function (Blueprint $table) {
            $table->string('address', 34)->primary();
            $table->unsignedInteger('userID')->index('userID');
            $table->unsignedInteger('npcID');
            $table->string('key', 64);
            $table->unsignedDecimal('amount', 12, 7);
            $table->timestamp('createdAt')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bitcoin_wallets');
    }
};
