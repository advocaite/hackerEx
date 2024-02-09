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
        Schema::create('mails_history', function (Blueprint $table) {
            $table->unsignedInteger('mid')->primary();
            $table->timestamp('infoDate')->useCurrentOnUpdate()->useCurrent();
            $table->string('info1', 15);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mails_history');
    }
};
