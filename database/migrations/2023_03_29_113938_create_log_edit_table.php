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
        Schema::create('log_edit', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vicID');
            $table->boolean('isNPC');
            $table->integer('editorID')->index('editorID');
            $table->text('logText');

            $table->index(['vicID', 'isNPC'], 'vicID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_edit');
    }
};
