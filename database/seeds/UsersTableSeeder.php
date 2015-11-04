<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

	public function run()
	{
		$users = [
			['id' => 1, 'first_name' => 'Geovanny', 'last_name' => 'Alonso', 'email' => 'geovannyalonso@gmail.com', 'password' => \Hash::make('Ludum2015'), 'role_id' => 1],
			['id' => 2, 'first_name' => 'Eydi', 'last_name' => 'Ramírez', 'email' => 'eydiramirez@gmail.com', 'password' => \Hash::make('Ludum2015'), 'role_id' => 1],
			['id' => 3, 'first_name' => 'Daniel', 'last_name' => 'Gálvez', 'email' => 'dkalvex@gmail.com', 'password' => \Hash::make('Ludum2015'), 'role_id' => 1],
			['id' => 4, 'first_name' => 'Admin', 'last_name' => 'App', 'email' => 'adminapp@gmail.com', 'password' => \Hash::make('Ludum2015'), 'role_id' => 2],
			['id' => 5, 'first_name' => 'Jugador', 'last_name' => '1', 'email' => 'jugador1@gmail.com', 'password' => \Hash::make('Ludum2015'), 'role_id' => 3],
			['id' => 6, 'first_name' => 'Jugador', 'last_name' => '2', 'email' => 'jugador2@gmail.com', 'password' => \Hash::make('Ludum2015'), 'role_id' => 3]
		];

		\DB::table('users')->insert($users);
	}
}