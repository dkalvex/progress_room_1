<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('UsersTableSeeder');
		$this->call('UserProfilesTableSeeder');
		$this->call('MissionTypesTableSeeder');
		$this->call('VariablesTableSeeder');
		$this->call('TournamentTypesTableSeeder');
		$this->call('ResourceTypesTableSeeder');
		$this->call('ActionsTableSeeder');
		$this->call('RelationshipsTableSeeder');
	}

}
