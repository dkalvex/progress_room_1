<?php namespace App\Http\Facades;

use Illuminate\Support\Facades\Facade;
use DB;
class logFacade extends Facade{
	public static function log($id,$id_user)
	{
		$date = date('m/d/Y h:i:s a', time());

		\DB::table('log')->insert(array(
			'id_event' => $id,
			'id_user' => $id_user,
			'created_at' => $date
			));
	}

}