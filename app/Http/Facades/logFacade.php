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

}