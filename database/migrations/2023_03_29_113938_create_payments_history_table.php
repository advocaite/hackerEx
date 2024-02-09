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
        Schema::create('payments_history', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('userID');
            $table->boolean('valid')->default(true);
            $table->text('info');
            $table->double('paid');
            $table->string('plan', 15);
            $table->text('confirmation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments_history');
    }
};
