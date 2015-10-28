<?php

use Illuminate\Database\Seeder;

class LeaguesTableSeeder extends Seeder
{

	public function run()
	{
		$leagues = [
			['id' => 1, 'name' => 'Volcán', 'description' => '', 'trophy' => 'fire.png'],
			['id' => 2, 'name' => 'Polo', 'description' => '', 'trophy' => 'ice.png'],
			['id' => 3, 'name' => 'Desierto', 'description' => '', 'trophy' => 'desert.png'],
			['id' => 4, 'name' => 'Selva', 'description' => '', 'trophy' => 'jungle.png'],
			['id' => 5, 'name' => 'Montaña', 'description' => '', 'trophy' => 'wind.png'],
			['id' => 6, 'name' => 'Medioevo', 'description' => '', 'trophy' => 'stone.png'],
			['id' => 7, 'name' => 'Isla Pirata', 'description' => '', 'trophy' => 'island.png'],
			['id' => 8, 'name' => 'Robótico', 'description' => '', 'trophy' => 'metal.png']
		];
		\DB::table('leagues')->insert($leagues);
	}
}