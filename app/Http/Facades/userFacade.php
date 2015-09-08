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
}
