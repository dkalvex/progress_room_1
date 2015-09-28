<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePodiumsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('podiums', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('first_score');
			$table->integer('second_score');
			$table->integer('third_score');

			$table->integer('first_user_id')->unsigned();
			$table->integer('second_user_id')->unsigned();
			$table->integer('third_user_id')->unsigned();
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
		Schema::drop('podiums');
	}

}
