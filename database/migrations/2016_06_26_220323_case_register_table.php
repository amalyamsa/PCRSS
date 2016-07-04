<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CaseRegisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('CaseRegister', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Casename');
            $table->string('Victimname');
            $table->string('casecode');
            $table->string('sex');
            $table->string('city');
            $table->string('municipal');
            $table->string('ward');
            $table->string('street');
            $table->string('email')->unique();
            $table->string('telephone');
            $table->string('password', 60);
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
         Schema::drop('CaseRegister');
    }
}
