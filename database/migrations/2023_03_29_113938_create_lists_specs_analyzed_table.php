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
        Schema::create('lists_specs_analyzed', function (Blueprint $table) {
            $table->unsignedInteger('listID')->primary();
            $table->unsignedInteger('minCPU');
            $table->unsignedInteger('maxCPU');
            $table->unsignedInteger('minRAM');
            $table->unsignedInteger('maxRAM');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lists_specs_analyzed');
    }
};
