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
        Schema::create('software_research', function (Blueprint $table) {
            $table->timestamp('researched_date')->useCurrentOnUpdate()->useCurrent();
            $table->increments('id');
            $table->unsignedInteger('userID')->index('userID');
            $table->unsignedInteger('softID')->index('softID');
            $table->unsignedTinyInteger('softwareType');
            $table->unsignedInteger('newVersion');
            $table->string('softwareName', 30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('software_research');
    }
};
