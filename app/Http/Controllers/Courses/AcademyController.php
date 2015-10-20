<?php namespace App\Http\Controllers\Courses;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class AcademyController extends Controller
{
	public function index(Request $request)
	{
		return View('courses/academy');
	}
}