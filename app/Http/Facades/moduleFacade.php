<?php namespace App\Http\Facades;

use Illuminate\Support\Facades\Facade;
use DB;
use App\Module as Module;
class moduleFacade extends Facade{
	public static function saveModule($request)
	{
		$module = new Module;
		$module->name = $request->input('name');
		$module->description = $request->input('description');
		$module->required_score = $request->input('required_score');
		$module->attempts = $request->input('attempts');
		$module->questions  = '10';
		$module->course_id  = $request->input('course_id');
		$module->save();
		\logFacade::log('70',$request->session()->get('user.id'));
	}
}