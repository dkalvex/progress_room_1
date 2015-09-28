<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTournamentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tournaments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->mediumText('description');
			$table->date('begin_date');
			$table->date('end_date');
			$table->integer('goal');
			$table->boolean('active')->default(1);

			$table->integer('variable_id')->unsigned();
			$table->integer('league_id')->nullable()->unsigned();
			$table->integer('team_id')->nullable()->unsigned();
			$table->integer('type_id')->unsigned();
			$table->integer('badge_id')->unsigned();

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
		Schema::drop('tournaments');
	}

}
