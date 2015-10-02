<?php

use Illuminate\Database\Seeder;

class TournamentTypesTableSeeder extends Seeder
{

	public function run()
	{
		$types = [
			['id' => 1, 'name' => 'Individual'],
			['id' => 2, 'name' => 'Grupal']
		];
		
		\DB::table('tournament_types')->insert($types);
	}
}