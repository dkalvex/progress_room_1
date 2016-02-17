<?php namespace App\Http\Controllers\Courses;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\User as User;

class EditController extends Controller
{
	public function index()
	{
		return view('courses.new');
	}
	public function getCourse(Request $request,$id)
	{				
		$course = \courseFacade::getCourse($id);
		return view('courses/edit')->with('course',$course);
	}
	public function saveCourse(Request $request)
	{
		$error = array();
		$message = array();
		try{
			\courseFacade::editCourse($request);
			$course = \courseFacade::getCourse($request->input('course_id'));			
			array_push($message,"El curso fue editado exitosamente");
			return view('courses/edit')->with('message',$message)->with('course',$course);
		}catch(Exception $e){
			array_push($error,"Ha ocurrido al tratar de guardar el curso");
			return view('courses/edit')->with('message',$message);
		}		
	}

}