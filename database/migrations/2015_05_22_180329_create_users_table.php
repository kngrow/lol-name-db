<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('users',function($table){
			$table->integer('id')->unsigned();
			$table->primary('id');
			$table->string('screen_name');
			$table->string('oauth_token');
			$table->string('oauth_token_secret');
			$table->string('lol_name');
			$table->integer('lol_id')->unsigned()->unique()->nullable();
			$table->string('server');
			$table->integer('icon_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::dropIfExists('users');
	}

}
