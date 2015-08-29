<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpportunityQuestionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('opportunity_question', function(Blueprint $table)
		{
			$table->increments('id');
			$table->mediumText('description');
			$table->string('option_1')->nullable();
			$table->string('option_2')->nullable();
			$table->string('option_3')->nullable();
			$table->string('option_4')->nullable();
			$table->string('option_5')->nullable();

			$table->integer('opportunity_id')->unsigned();
			/*$table->foreign('opportunity_id')
				->references('id')
				->on('opportunity');*/

			$table->integer('type_id')->unsigned();
			/*$table->foreign('type_id')
				->references('id')
				->on('opportunity_question_type');*/

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
		Schema::drop('opportunity_question');
	}

}
