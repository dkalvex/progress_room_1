<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lesson', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->mediumText('description')->nullable();
			$table->integer('order');

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
		Schema::drop('lesson');
	}

}
