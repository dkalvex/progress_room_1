<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('scores', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('first_awarded_points');
			$table->integer('second_awarded_points');
			$table->integer('third_awarded_points');
			$table->integer('first_redeemable_points');
			$table->integer('second_redeemable_points');
			$table->integer('third_redeemable_points');

			$table->integer('tournament_id')->unsigned();

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
		Schema::drop('scores');
	}

}
