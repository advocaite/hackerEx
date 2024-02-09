<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    /*
    CREATE TABLE `users` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `login` varchar(15) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gamePass` varchar(8) NOT NULL,
  `gameIP` bigint(11) NOT NULL,
  `realIP` bigint(11) NOT NULL,
  `homeIP` bigint(11) NOT NULL,
  `learning` tinyint(1) NOT NULL DEFAULT '0',
  `premium` tinyint(1) NOT NULL,
  `lastLogin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `gameIP` (`gameIP`),
  KEY `lastLogin` (`lastLogin`)
) ENGINE=InnoDB AUTO_INCREMENT=750703 DEFAULT CHARSET=latin1;
*/
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('login');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('gamePass')->nullable();
            $table->bigInteger('gameIP')->nullable();
            $table->bigInteger('realIP')->nullable();
            $table->bigInteger('homeIP')->nullable();
            $table->tinyInteger('learning');
            $table->tinyInteger('premium');
            $table->rememberToken();
            $table->timestamps();
            $table->index(['gameIP', 'updated_at']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
