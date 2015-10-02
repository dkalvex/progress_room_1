<?php

use Illuminate\Database\Seeder;

class UserRolesTableSeeder extends Seeder
{

	public function run()
	{
		$roles = [
			['id' => 1, 'name' => 'Root'],
			['id' => 2, 'name' => 'Administrador'],
			['id' => 3, 'name' => 'Director'],
			['id' => 4, 'name' => 'Jugador']
		];
		\DB::table('user_roles')->insert($roles);
	}
}