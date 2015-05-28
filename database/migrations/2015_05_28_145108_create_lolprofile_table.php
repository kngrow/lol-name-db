<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLolprofileTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('lol_profile',function($table){
			$table->integer('id');
			$table->integer('twitter_id')->unsigned();
			$table->foreign('twitter_id')->references('id')->on('users')->onDelete('cascade');
			$table->string('server');
			$table->integer('level');
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
	}

}
