<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModuleOptionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('module_option', function(Blueprint $table)
		{
			$table->increments('id');
			$table->mediumText('option');
			$table->boolean('success');

			$table->integer('question_id')->unsigned();
			/*$table->foreign('question_id')
				->references('id')
				->on('module_question');*/

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
		Schema::drop('module_option');
	}

}
