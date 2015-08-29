<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfileTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_profile', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username')->unique()->nullable();
			$table->string('photo')->nullable();
			$table->bigInteger('total_points')->default('0');
			$table->bigInteger('actual_points')->default('0');
			$table->bigInteger('redeemable_points')->default('0');
			$table->mediumText('bio')->nullable();
			$table->string('twitter')->nullable();
			$table->string('facebook')->nullable();
			$table->string('google')->nullable();

			$table->integer('user_id')->unsigned();
			/*$table->foreign('user_id')
				->references('id')
				->on('user')
				->onDelete('cascade');*/

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
		Schema::drop('user_profile');
	}

}
