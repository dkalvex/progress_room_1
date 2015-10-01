<?php

use Illuminate\Database\Seeder;

class UserProfilesTableSeeder extends Seeder
{

	public function run()
	{
		$users = [
			['id' => 1, 'total_points' => 0, 'actual_points' => 0, 'redeemable_points' => 0, 'user_id' => 1],
			['id' => 2, 'total_points' => 0, 'actual_points' => 0, 'redeemable_points' => 0, 'user_id' => 2],
			['id' => 3, 'total_points' => 0, 'actual_points' => 0, 'redeemable_points' => 0, 'user_id' => 3],
			['id' => 4, 'total_points' => 0, 'actual_points' => 0, 'redeemable_points' => 0, 'user_id' => 4],
			['id' => 5, 'total_points' => 0, 'actual_points' => 0, 'redeemable_points' => 0, 'user_id' => 5],
			['id' => 6, 'total_points' => 0, 'actual_points' => 0, 'redeemable_points' => 0, 'user_id' => 6]
		];
		
		\DB::table('user_profiles')->insert($users);
	}
}