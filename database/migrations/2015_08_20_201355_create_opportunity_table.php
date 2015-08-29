<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpportunityTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('opportunity', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->mediumText('description');
			$table->string('position');
			$table->date('limit');
			$table->integer('awarded_points')->nullable();
			$table->integer('redeemable_points')->nullable();
			$table->boolean('active')->default(true);

			$table->integer('user_id')->unsigned();
			/*$table->foreign('user_id')
				->references('id')
				->on('user');*/

			$table->integer('badge_id')->nullable()->unsigned();
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
		Schema::drop('opportunity');
	}

}
