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

		$this->call('ActionsTableSeeder');
		$this->call('BadgesTableSeeder');
		$this->call('CoursesTableSeeder');
		$this->call('LeaguesTableSeeder');
		$this->call('LessonsTableSeeder');
		$this->call('MissionsTableSeeder');
		$this->call('MissionTypesTableSeeder');
		$this->call('ModulesTableSeeder');
		$this->call('RelationshipsTableSeeder');
		$this->call('ResourcesTableSeeder');
		$this->call('ResourceTypesTableSeeder');
		$this->call('TournamentTypesTableSeeder');
		$this->call('UserProfilesTableSeeder');
		$this->call('UserRolesTableSeeder');
		$this->call('UsersTableSeeder');
		$this->call('VariablesTableSeeder');
	}

}
