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
			$table->boolean('like')->nullable();

			$table->integer('user_id')->unsigned();
			/*$table->foreign('user_id')
				->references('id')
				->on('user');*/

			$table->integer('achievement_id')->unsigned();
			/*$table->foreign('achievement_id')
				->references('id')
				->on('achievement');*/

			$table->integer('parent_id')->nullable()->unsigned();
			/*$table->foreign('parent_id')
				->references('id')
				->on('achievement_comment');*/

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
