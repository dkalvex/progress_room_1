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
		$userName = $request->input('userName');

		$user_id = DB::table('user')->insertGetId(
						['first_name' => $first_name ,'email' => $email ,'role_id' => $role ,'last_name' => $last_name,'team_id' => $team,'active' => $active]
					);		

		DB::table('user_profile')->insert([
			['username' => $userName ,'photo' => 'default.png' ,'user_id' => $user_id ]
		]);
		
		return redirect('users/new');
	}

}