<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('events', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->mediumText('description');
			$table->date('begin_date');
			$table->date('begin_time');
			$table->integer('duration');
			$table->string('place');
			$table->integer('awarded_points')->nullable();
			$table->integer('redeemable_points')->nullable();
			$table->string('attach')->nullable();
			$table->boolean('active')->default(1);

			$table->integer('league_id')->nullable()->unsigned();
			$table->integer('team_id')->nullable()->unsigned();
			$table->integer('badge_id')->nullable()->unsigned();
			$table->integer('course_id')->nullable()->unsigned();

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
		Schema::drop('events');
	}

}
