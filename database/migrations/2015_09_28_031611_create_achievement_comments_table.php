<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAchievementCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('achievement_comments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->mediumText('comment');

			$table->integer('user_id')->unsigned();
			$table->integer('achievement_id')->unsigned();
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
		Schema::drop('achievement_comments');
	}

}
