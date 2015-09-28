<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_profiles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username')->nullable();
			$table->string('photo')->nullable();
			$table->integer('total_points')->default(0);
			$table->integer('actual_points')->default(0);
			$table->integer('redeemable_points')->default(0);
			$table->mediumText('bio')->nullable();
			$table->string('twitter')->nullable();
			$table->string('facebook')->nullable();
			$table->string('google')->nullable();
			$table->string('linkedin')->nullable();
			$table->date('birth_date')->nullable();
			$table->date('entry_date')->nullable();

			$table->integer('user_id')->unsigned();

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
		Schema::drop('user_profiles');
	}

}
