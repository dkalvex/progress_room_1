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
			$table->decimal('result');
			$table->boolean('active')->default(1);

			$table->integer('user_id')->unsigned();
			$table->integer('course_id')->unsigned();
			
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
