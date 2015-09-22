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
			$table->string('file')->nullable();
			$table->float('score')->nullable();
			$table->mediumText('comment')->nullable();
			$table->boolean('success')->default(false);

			$table->integer('user_id')->unsigned();
			/*$table->foreign('user_id')
				->references('id')
				->on('user');*/

			$table->integer('opportunity_id')->unsigned();
			/*$table->foreign('opportunity_id')
				->references('id')
				->on('opportunity');*/

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
