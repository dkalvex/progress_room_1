<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRedemptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('redemptions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->bigInteger('redeemed_points');

			$table->integer('gift_id')->unsigned();
			/*$table->foreign('gift_id')
				->references('id')
				->on('gift');*/

			$table->integer('user_id')->unsigned();
			/*$table->foreign('user_id')
				->references('id')
				->on('user');*/

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
		Schema::drop('redemptions');
	}

}
