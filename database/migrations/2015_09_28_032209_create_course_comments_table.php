<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('course_comments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->mediumText('comment');

			$table->integer('user_id')->unsigned();
			$table->integer('course_id')->unsigned();
			$table->integer('partent_id')->nullable()->unsigned();
			
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
		Schema::drop('course_comments');
	}

}
