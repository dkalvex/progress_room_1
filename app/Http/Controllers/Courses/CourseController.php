<?php namespace App\Http\Controllers\Courses;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class CourseController extends Controller
{
	public function index(Request $request, $id)
	{				
		$course = \courseFacade::getCourse($id);
		$modules = \courseFacade::getModules($id);
		$comments = \courseFacade::getComments($id);
		
		return view('courses/course')->with('course',$course)->with('modules',$modules)->with('comments',$comments);
	}

	public function module(Request $request, $id)
	{
		$module = \courseFacade::getLessons($id);
		return view('courses/module')->with('module',$module);
	}

	public function quiz(Request $request)
	{
		return View('courses/quiz');
	}
}