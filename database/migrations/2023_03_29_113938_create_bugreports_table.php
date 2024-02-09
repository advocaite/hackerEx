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
        Schema::create('bugreports', function (Blueprint $table) {
            $table->integer('id', true);
            $table->timestamp('dateCreated')->useCurrentOnUpdate()->useCurrent();
            $table->text('bugText');
            $table->unsignedInteger('reportedBy');
            $table->text('sessionContent');
            $table->text('serverContent');
            $table->boolean('follow')->default(false);
            $table->boolean('solved')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bugreports');
    }
};
