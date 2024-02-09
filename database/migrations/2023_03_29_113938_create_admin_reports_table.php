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
        Schema::create('admin_reports', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('errorID');
            $table->integer('userID');
            $table->text('report');
            $table->boolean('critical');
            $table->timestamp('time')->useCurrentOnUpdate()->useCurrent();
            $table->boolean('read');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_reports');
    }
};
