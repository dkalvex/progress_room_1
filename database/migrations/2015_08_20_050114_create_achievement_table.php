<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAchievementTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('achievement', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->mediumText('description');
			$table->string('organization')->nullable();
			$table->date('start_date');
			$table->date('end_date')->nullable();

			$table->integer('user_id')->unsigned();
			/*$table->foreign('user_id')
				->references('id')
				->on('user');*/

			$table->integer('achievement_type_id')->unsigned();
			/*$table->foreign('achievement_type_id')
				->references('id')
				->on('achievement_type');*/

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
		Schema::drop('achievement');
	}

}
