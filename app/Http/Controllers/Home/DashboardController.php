<?php namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class DashboardController extends Controller
{
	public function index(Request $request)
	{
		return view('home/dashboard')->with('user',$request->session()->get('user'));
	}

}