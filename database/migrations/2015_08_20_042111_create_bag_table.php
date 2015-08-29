<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBagTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bag', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('user_id')->unsigned();
			/*$table->foreign('user_id')
				->references('id')
				->on('user');*/

			$table->integer('badge_id')->unsigned();
			/*$table->foreign('badge_id')
				->references('id')
				->on('badge');*/

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
		Schema::drop('bag');
	}

}
