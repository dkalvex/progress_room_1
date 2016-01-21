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
		$error = array();
		$message = array();
		try{
			\moduleFacade::saveModule($request);
			$course = \courseFacade::getCourse($request->input('course_id'));
			$modules = \courseFacade::getModules($request->input('course_id'));			
			array_push($message,"El modulo fue guardado exitosamente");
			return view('courses/edit')->with('message',$message)->with('course',$course)->with('modules',$modules);
		}catch(Exception $e){
			array_push($error,"Ha ocurrido al tratar de guardar el modulo");			
			return redirect('courses/edit')->with('errors',$error);
		}
	}
}