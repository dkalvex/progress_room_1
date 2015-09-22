<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->boolean('active')->default(true);
			$table->rememberToken();

			$table->integer('role_id')->unsigned();
			/*$table->foreign('role_id')
				->references('id')
				->on('user_role');*/

			$table->integer('team_id')->nullable()->unsigned();
			/*$table->foreign('team_id')
				->references('id')
				->on('team');*/

			$table->integer('level_id')->nullable()->unsigned();
			/*$table->foreign('level_id')
				->references('id')
				->on('level');*/

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
		Schema::drop('users');
	}

}
