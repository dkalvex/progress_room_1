<?php namespace App\Http\Controllers\Courses;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class CourseController extends Controller
{
	public function index(Request $request)
	{
		return View('courses/course');
	}

	public function module(Request $request)
	{
		return View('courses/module');
	}

	public function quiz(Request $request)
	{
		return View('courses/quiz');
	}
}