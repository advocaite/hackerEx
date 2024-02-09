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
        Schema::create('software_texts', function (Blueprint $table) {
            $table->bigInteger('creator')->nullable();
            $table->bigInteger('id')->primary();
            $table->integer('userID');
            $table->boolean('isNPC');
            $table->text('text');
            $table->timestamp('lastEdit')->useCurrentOnUpdate()->useCurrent();
            $table->boolean('ddos')->default(false);

            $table->index(['userID', 'isNPC'], 'userID_isNPC');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('software_texts');
    }
};
