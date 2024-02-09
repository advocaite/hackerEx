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
        Schema::create('changelog', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('description', 100);
            $table->text('text');
            $table->timestamp('dateCreated')->useCurrentOnUpdate()->useCurrent();
            $table->string('author', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('changelog');
    }
};
