<?php namespace App\Http\Facades;

use Illuminate\Support\Facades\Facade;
use DB;
use App\Log as Log;

class logFacade extends Facade{
	public static function log($id, $user_id)
	{
		$log = new Log;
		$log->action_id = $id;
		$log->user_id = $user_id;
		$log->save();
	}

	public static function getActivities()
	{

		$log= array();
		$log = DB::table('logs')
		->select('actions.name','users.first_name','users.last_name','description')
		->join('actions', 'actions.id', '=', 'logs.action_id')
		->join('users', 'users.id', '=', 'logs.user_id')
		->where('users.active','1')->take(8)->get();

		return $log;
	}

}