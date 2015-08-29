<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModuleQuestionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('module_question', function(Blueprint $table)
		{
			$table->increments('id');
			$table->mediumText('description')->nullable();

			$table->integer('module_id')->unsigned();
			/*$table->foreign('module_id')
				->references('id')
				->on('module');*/

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
		Schema::drop('module_question');
	}

}
