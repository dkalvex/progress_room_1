<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserScoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_scores', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('last_position');
			$table->integer('last_score');
			$table->integer('new_position');
			$table->integer('new_score');

			$table->integer('user_id')->unsigned();

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
		Schema::drop('user_scores');
	}

}
