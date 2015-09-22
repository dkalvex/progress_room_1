<?php namespace App\Http\Facades;

use Illuminate\Support\Facades\Facade;
use DB;
class userFacade extends Facade{
	public static function getAll()
	{
		$allUsers= array();
		$allUsers = DB::table('user')
		->select('user.id','first_name','last_name','user_role.name as rol','email','active','team_id','level_id' )
		->join('user_role', 'user_role.id', '=', 'user.role_id')
		->where('user.active','1')->get();
		return $allUsers;
	}
	public static function saveUser($user,$psd)
	{
		$date = date('m/d/Y h:i:s a', time());

		$user_id = \DB::table('user')->insertGetId(array(
			'first_name' => $user['first_name'] ,
			'last_name' => $user['last_name'],
			'email' => $user['email'],
			'password' => \Hash::make($psd),
			'role_id' => $user['role'],
			'team_id' => $user['team'],
			'active' => $user['active'],
			'created_at' => $date
			));

		\DB::table('user_profile')->insert(array(
			'username' => $user['userName'] ,
			'photo' => 'default.png' ,
			'user_id' => $user_id,
			'created_at' => $date
			));
	}
}
