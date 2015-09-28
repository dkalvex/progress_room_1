<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostulationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('postulations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->mediumText('message');
			$table->string('file');
			$table->integer('score');
			$table->mediumText('comments');
			$table->boolean('success');

			$table->integer('user_id')->unsigned();
			$table->integer('opportunity_id')->unsigned();
			
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
		Schema::drop('postulations');
	}

}
