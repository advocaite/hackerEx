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
        Schema::create('mails', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('from')->index('from');
            $table->integer('to')->index('to');
            $table->boolean('type')->index('type');
            $table->string('subject', 40);
            $table->text('text');
            $table->dateTime('dateSent');
            $table->boolean('isRead');
            $table->boolean('isDeleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mails');
    }
};
