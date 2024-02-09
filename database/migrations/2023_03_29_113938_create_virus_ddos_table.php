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
        Schema::create('virus_ddos', function (Blueprint $table) {
            $table->integer('userID');
            $table->bigInteger('ip')->index('ip');
            $table->bigInteger('ddosID')->index('ddosID');
            $table->string('ddosName', 30);
            $table->smallInteger('ddosVersion');
            $table->integer('cpu');
            $table->boolean('active')->default(true);

            $table->primary(['userID', 'ip']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('virus_ddos');
    }
};
