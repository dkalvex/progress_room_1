<?php namespace App\Http\Controllers\Courses;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class NewController extends Controller
{
	public function index()
	{
		return view('courses.new');
	}
	public function saveCourse(Request $request)
	{
		$error = array();
		$message = array();
		try{			
			$course = \courseFacade::saveCourse($request);
			$course = \courseFacade::getCourse($course->id);
			$modules = \courseFacade::getModules($course->id);		
			array_push($message,"El curso fue guardado exitosamente");
			return view('courses/edit')->with('message',$message)->with('course',$course)->with('modules',$modules)->with('new','1');
		}catch(Exception $e){
			array_push($error,"Ha ocurrido al tratar de guardar el usuario");
			echo 'Error en guardar usuario',  $e->getMessage(), "\n";
			return redirect('courses/new')->with('errors',$error);
		}
	}
}