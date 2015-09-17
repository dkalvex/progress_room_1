<?php namespace App\Http\Controllers\Events;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class AllController extends Controller
{
	public function index(Request $request)
	{
		return View('events/all');
	}
}