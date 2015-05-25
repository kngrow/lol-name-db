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
			$table->integer('lol_id')->unsigned();
			$table->foreign('lol_id')->references('lol_id')->on('users')->onDelete('cascade');
			$table->integer('opponent_id')->unsigned();
			$table->foreign('opponent_id')->references('lol_id')->on('opponent')->onDelete('cascade');
			$table->integer('dual');
			$table->string('champ');
			$table->timestamp('last_battle');
			$table->integer('win');
			$table->integer('game_id');
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
