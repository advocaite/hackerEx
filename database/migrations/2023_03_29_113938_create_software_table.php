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
        Schema::create('software', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('userID');
            $table->string('softName', 25);
            $table->integer('softVersion');
            $table->integer('softSize');
            $table->integer('softRam');
            $table->smallInteger('softType');
            $table->dateTime('softLastEdit');
            $table->boolean('softHidden');
            $table->bigInteger('softHiddenWith');
            $table->boolean('isNPC');
            $table->bigInteger('originalFrom');
            $table->integer('licensedTo');
            $table->boolean('isFolder')->default(false);

            $table->index(['userID', 'isNPC'], 'userID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('software');
    }
};
