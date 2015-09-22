<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

	public function run()
	{
		\DB::table('users')->insert(array(
			'first_name' => 'Eydi',
			'last_name' => 'Ramirez',
			'email' => 'eydiramirez@gmail.com',
			'password' => \Hash::make('Ludum2015'),
			'role_id' => 3
		));
	}
}