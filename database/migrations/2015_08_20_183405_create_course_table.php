<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('course', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->mediumText('description');
			$table->integer('awarded_points')->nullable();
			$table->integer('redeemable_points')->nullable();
			$table->float('rating')->nullable();
			$table->string('icon')->nullable();
			$table->boolean('active')->default(false);

			$table->integer('parent_id')->nullable()->unsigned();
			/*$table->foreign('parent_id')
				->references('id')
				->on('course');*/

			$table->integer('badge_id')->nullable()->unsigned();
			/*$table->foreign('badge_id')
				->references('id')
				->on('badge');*/

			$table->integer('subject_id')->unsigned();
			/*$table->foreign('subject_id')
				->references('id')
				->on('subject');*/

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
		Schema::drop('course');
	}

}
