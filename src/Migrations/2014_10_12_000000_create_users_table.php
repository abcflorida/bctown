<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            //$table->string('name');
            $table->string('firstname',50);
            $table->string('lastname',50);
            $table->string('phone',25);
            $table->string('dealerid',25);
            $table->integer('lastaffiliatesid',25)->default(0);
            $table->integer('defaultsiteid')->default(0);            
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('newsletter')->default(0);
            $table->boolean('isguest')->default(0);
            $table->boolean('isaffiliatelead')->default(0);
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
        Schema::drop('users');
    }
}
