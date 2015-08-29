<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTournamentPodiumTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tournament_podium', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('first_score')->default('0');
			$table->integer('second_score')->default('0');
			$table->integer('third_score')->default('0');

			$table->integer('first_user_id')->nullable()->unsigned();
			/*$table->foreign('first_user_id')
				->references('id')
				->on('user');*/

			$table->integer('second_user_id')->nullable()->unsigned();
			/*$table->foreign('second_user_id')
				->references('id')
				->on('user');*/

			$table->integer('third_user_id')->nullable()->unsigned();
			/*$table->foreign('third_user_id')
				->references('id')
				->on('user');*/

			$table->integer('tournament_id')->unsigned();
			/*$table->foreign('tournament_id')
				->references('id')
				->on('tournament');*/

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
		Schema::drop('tournament_podium');
	}

}
