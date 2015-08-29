<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTournamentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tournament', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->mediumText('description');
			$table->date('begin_date');
			$table->date('end_date');
			$table->float('goal');
			$table->integer('first_awarded_points');
			$table->integer('first_redeemable_points')->nullable();
			$table->integer('second_awarded_points');
			$table->integer('second_redeemable_points')->nullable();
			$table->integer('third_awarded_points');
			$table->integer('third_redeemable_points')->nullable();
			$table->boolean('active');

			$table->integer('variable_id')->unsigned();
			/*$table->foreign('variable_id')
				->references('id')
				->on('variable');*/

			$table->integer('league_id')->nullable()->unsigned();
			/*$table->foreign('league_id')
				->references('id')
				->on('league');*/

			$table->integer('badge_id')->nullable()->unsigned();
			/*$table->foreign('badge_id')
				->references('id')
				->on('badge');*/

			$table->integer('type_id')->unsigned();
			/*$table->foreign('type_id')
				->references('id')
				->on('tournament_type');*/

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
		Schema::drop('tournament');
	}

}
