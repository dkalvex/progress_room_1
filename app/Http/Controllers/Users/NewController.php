<?php namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class NewController extends Controller
{
	public function index()
	{
		return view('users.new');
	}
	public function saveUser(Request $request)
	{
		$email = $request->input('email');
		$first_name = $request->input('first_name');
		$last_name = $request->input('last_name');
		$role = $request->input('role');
		$team = $request->input('team');
		$active = $request->input('active');

		echo $email." ".$first_name." ".$last_name." ".$role." ".$team." ".$active;
		//echo "Estamos en save";
	}

}