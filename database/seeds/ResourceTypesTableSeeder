<?php

use Illuminate\Database\Seeder;

class ResourceTypesTableSeeder extends Seeder
{

	public function run()
	{
		$types = [
			['id' => 1, 'name' => 'PDF'],
			['id' => 2, 'name' => 'Video'],
			['id' => 3, 'name' => 'Youtube']
		];
		\DB::table('resource_types')->insert($types);
	}
}