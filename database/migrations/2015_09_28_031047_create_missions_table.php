<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMissionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('missions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->mediumText('description');
			$table->integer('awarded_points');
			$table->integer('redeemable_points');
			$table->integer('goal');

			$table->integer('variable_id')->unsigned();
			$table->integer('league_id')->nullable()->unsigned();
			$table->integer('badge_id')->nullable()->unsigned();
			$table->integer('parent_id')->nullable()->unsigned();
			$table->integer('type_id')->unsigned();
			$table->integer('team_id')->nullable()->unsigned();

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
		Schema::drop('missions');
	}

}
