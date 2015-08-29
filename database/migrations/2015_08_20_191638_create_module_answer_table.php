<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModuleAnswerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('module_answer', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('option_id')->unsigned();
			/*$table->foreign('option_id')
				->references('id')
				->on('module_option');*/

			$table->integer('question_id')->unsigned();
			/*$table->foreign('question_id')
				->references('id')
				->on('module_question');*/

			$table->integer('attempt_id')->unsigned();
			/*$table->foreign('attempt_id')
				->references('id')
				->on('module_attempt');*/

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
		Schema::drop('module_answer');
	}

}
