<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('courses', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->mediumText('description');
			$table->integer('awarded_points');
			$table->integer('redeemable_points');
			$table->decimal('rating');
			$table->integer('likes');
			$table->boolean('active')->default(1);

			$table->integer('badge_id')->unsigned();
			$table->integer('team_id')->nullable()->unsigned();
			$table->integer('league_id')->nullable()->unsigned();
			$table->integer('subject_id')->unsigned();
			$table->integer('parent_id')->nullable()->unsigned();
			
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
		Schema::drop('courses');
	}

}
