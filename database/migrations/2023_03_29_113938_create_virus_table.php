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
        Schema::create('virus', function (Blueprint $table) {
            $table->bigInteger('installedIp')->index('installedIp');
            $table->integer('installedBy');
            $table->bigInteger('virusID')->primary();
            $table->smallInteger('virusVersion');
            $table->bigInteger('originalID');
            $table->tinyInteger('virusType');
            $table->string('lastCollect', 19);
            $table->boolean('active')->default(true);

            $table->index(['installedIp', 'installedBy'], 'por_instalacao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('virus');
    }
};
