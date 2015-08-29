<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseCalendarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('course_calendar', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('begin_date');
			$table->date('end_date');

			$table->integer('course_id')->unsigned();
			/*$table->foreign('course_id')
				->references('id')
				->on('course');*/

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
		Schema::drop('course_calendar');
	}

}
