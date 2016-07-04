<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterCriminalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('RegisterCriminal', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('lastname');
            $table->string('sex');
            $table->string('city');
            $table->string('municipal');
            $table->string('ward');
            $table->string('street');
            $table->string('email')->unique();
            $table->string('telephone');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('RegisterCriminal');
    }
}
