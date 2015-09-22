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
			/*$table->foreign('user_id')
				->references('id')
				->on('user');*/

			$table->integer('course_id')->unsigned();
			/*$table->foreign('course_id')
				->references('id')
				->on('course');*/

			$table->integer('parent_id')->nullable()->unsigned();
			/*$table->foreign('parent_id')
				->references('id')
				->on('course_comment');*/

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
