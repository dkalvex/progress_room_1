<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseSubscriptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('course_subscriptions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('rating');
			$table->float('result');
			$table->boolean('active')->default(true);

			$table->integer('course_id')->unsigned();
			/*$table->foreign('course_id')
				->referenes('id')
				->on('course_calendar');*/

			$table->integer('user_id')->unsigned();
			/*$table->foreign('user_id')
				->references('id')
				->on('user');*/

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
		Schema::drop('course_subscriptions');
	}

}
