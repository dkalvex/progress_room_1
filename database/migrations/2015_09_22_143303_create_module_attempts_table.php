<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModuleAttemptsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('module_attempts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->float('result');

			$table->integer('subscription_id')->unsigned();
			/*$table->foreign('subscription_id')
				->references('id')
				->on('course_subscription');*/

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
		Schema::drop('module_attempts');
	}

}
