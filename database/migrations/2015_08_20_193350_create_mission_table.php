<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMissionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mission', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->mediumText('description');
			$table->integer('awarded_points')->nullable();
			$table->integer('redeemable_points')->nullable();
			$table->float('goal');

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

			$table->integer('parent_id')->nullable()->unsigned();
			/*$table->foreign('parent_id')
				->references('id')
				->on('mission');*/

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
		Schema::drop('mission');
	}

}
