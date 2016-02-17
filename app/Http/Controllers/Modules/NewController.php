<?php namespace App\Http\Controllers\Modules;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class NewController extends Controller
{
	public function index()
	{
		
	}
	public function saveModule(Request $request)
	{
		//$error = array();
		//$message = array();
		try{
			print_r($request);
			\moduleFacade::saveModule($request);
		}catch(Exception $e){
			return "0";
		}
	}
	public function getModules(Request $request){
		$modules = \courseFacade::getModules($request->input("id"));
		return $modules;
	}
}