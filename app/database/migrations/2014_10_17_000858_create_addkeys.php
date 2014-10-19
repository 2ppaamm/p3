<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddkeys extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Add foreign keys to databases
        Schema::table('users', function($table){
            $table->integer('country_id');
        });

    }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// Drop the foreign key columns created
        Schema::table('users', function($table){
            $table->dropColumn('country_id');
        });
        Schema::table('posts', function($table){
            $table->dropColumn('user_id');
        });
	}

}
