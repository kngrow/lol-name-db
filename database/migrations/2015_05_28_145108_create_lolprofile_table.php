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
			$table->integer('id')->unsigned();
			$table->primary('id');
			$table->unsignedInteger('twitter_id')->unsigned();

			$table->string('server');
			$table->integer('level');
			$table->integer('icon_id');

			$table->foreign('twitter_id')->references('id')->on('users')->onDelete('cascade');
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
		Schema::drop('lol_profile');
	}

}
