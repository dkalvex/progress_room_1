<?php namespace App\Http\Controllers\Courses;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Course as Course;

class AcademyController extends Controller
{
	public function index(Request $request)
	{
		$courses = \courseFacade::getAll();
		return view("courses/academy",['courseAll'=>$courses]);
	}
}