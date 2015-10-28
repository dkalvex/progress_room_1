<?php

use Illuminate\Database\Seeder;

class MissionTypesTableSeeder extends Seeder
{

	public function run()
	{
		$types = [
			['id' => 1, 'name' => 'Indicador'],
			['id' => 2, 'name' => 'Individual'],
			['id' => 3, 'name' => 'Por equipos'],
			['id' => 4, 'name' => 'Negativo']
		];
		\DB::table('mission_types')->insert($types);
	}
}