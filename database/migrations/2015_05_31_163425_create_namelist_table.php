<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNamelistTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('namelist',function($table){
			$table->increments('id');
			$table->unsignedInteger('lol_id')->unsigned();

			$table->string('champion');
			$table->timestamp('last_battle');
			$table->integer('win');
			$table->unsignedInteger('opponent_id')->unsigned();
			$table->integer('game_id');

			$table->foreign('lol_id')->references('id')->on('lol_profile')->onDelete('cascade');
			$table->foreign('opponent_id')->references('id')->on('opponent')->onDelete('cascade');
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
		Schema::drop('namelist');
	}

}
