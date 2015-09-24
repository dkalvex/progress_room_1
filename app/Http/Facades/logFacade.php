<?php namespace App\Http\Facades;

use Illuminate\Support\Facades\Facade;
use DB;
use App\Log as Log;
class logFacade extends Facade{
	public static function log($id,$id_user)
	{
		$log = new Log;
		$log->id_event = $id;
		$log->id_user = $id_user;
		$log->save();
	}

}