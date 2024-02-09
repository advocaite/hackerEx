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
        Schema::create('bankaccounts', function (Blueprint $table) {
            $table->integer('id', true);
            $table->bigInteger('bankAcc')->index('bankAcc');
            $table->string('bankPass', 6);
            $table->integer('bankID');
            $table->integer('bankUser')->index('id');
            $table->bigInteger('cash');
            $table->timestamp('dateCreated')->useCurrent();

            $table->index(['bankUser', 'bankAcc', 'bankID'], 'bankUser');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bankaccounts');
    }
};
