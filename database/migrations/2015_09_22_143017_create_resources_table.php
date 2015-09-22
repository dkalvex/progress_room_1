<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResourcesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('resources', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->mediumText('description')->nullable();
			$table->string('url');

			$table->integer('resource_type_id')->unsigned();
			/*$table->foreign('resource_type_id')
				->references('id')
				->on('resource_type');*/

			$table->integer('lesson_id')->unsigned();
			/*$table->foreign('lesson_id')
				->references('id')
				->on('lesson');*/

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
		Schema::drop('resources');
	}

}
