<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpportunityAnswersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('opportunity_answers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->mediumText('answer');
			$table->boolean('score')->default(false);

			$table->integer('question_id')->unsigned();
			/*$table->foreign('question_id')
				->references('id')
				->on('opportunity_question');*/

			$table->integer('postulation_id')->unsigned();
			/*$table->foreign('postulation_id')
				->references('id')
				->on('postulation');*/

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
		Schema::drop('opportunity_answers');
	}

}
