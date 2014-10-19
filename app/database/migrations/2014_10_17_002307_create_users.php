<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//create post table
        // Create posts table
        Schema::create('posts', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title',255);
            $table->string('slug',255);
            $table->text('excerpt');
            $table->longText('content');
            $table->timestamp('published_at');
            $table->boolean('published');
            $table->text('content_html');
            $table->timestamps();
        });

        Schema::table('posts', function($table){
            $table->integer('user_id');
        });
    }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// Drop the post table
        Schema::drop('posts');

    }

}
