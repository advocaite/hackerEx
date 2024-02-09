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
        Schema::create('clan', function (Blueprint $table) {
            $table->integer('clanID', true);
            $table->unsignedInteger('clanIP');
            $table->string('name', 25);
            $table->string('nick', 3);
            $table->text('desc');
            $table->smallInteger('slotsUsed');
            $table->smallInteger('slotsTotal');
            $table->dateTime('createdOn');
            $table->integer('createdBy');
            $table->tinyInteger('powerTax');
            $table->tinyInteger('moneyTax');
            $table->integer('money');
            $table->integer('power');
            $table->boolean('corp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clan');
    }
};
