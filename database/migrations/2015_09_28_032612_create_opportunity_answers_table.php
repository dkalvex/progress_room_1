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
			$table->integer('score');

			$table->integer('question_id')->unsigned();
			$table->integer('postulation_id')->unsigned();

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
