<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class Startapp extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create lookup table : Countries
        Schema::create('countries', function(Blueprint $table)
        {
            $table->increments('id');
            $table->boolean('is_enabled');
            $table->string('name');
            $table->string('code');
            $table->timestamps();
        });

        // Create users table
        Schema::create('users', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name',255);
            $table->string('email',255);
            $table->string('password',255);
            $table->string('activation_code',255);
            $table->string('persist_code',255);
            $table->string('reset_password_code',255);
            $table->text('permissions',255);
            $table->boolean('is_activated');
            $table->timestamp('activated_at');
            $table->timestamp('last_login');
            $table->string('address');
            $table->string('post_code');
            $table->string('phone');
            $table->string('username',255);
            $table->string('firstname',255);
            $table->string('lastname',255);
            $table->date('birthdate');
            $table->string('school');
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
        Schema::drop('countries');
    }

}
