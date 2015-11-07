<?php namespace App\Http\Facades;

use Illuminate\Support\Facades\Facade;
use DB;
use App\User as User;
use App\User_profile as User_profile;
use App\User_rol as Rol;
use App\Team as Team;
class userFacade extends Facade{
	public static function getAll()
	{
		$allUsers= array();
		$allUsers = DB::table('users')
		->select('users.id','first_name','last_name','user_roles.name as rol','email','photo','entry_date','actual_points','active')
		->join('user_roles', 'user_roles.id', '=', 'users.role_id')
		->join('user_profiles', 'user_profiles.user_id', '=', 'users.id')
		->where('users.active','<>','3')
		->where('users.role_id','<>','1')->get();
		return $allUsers;
	}
	public static function deleteUser($id)
	{
		$user = User::find($id);
		$user->active = "3";
		$user->save();
		return true;
	}
	public static function getUser($id)
	{
		$user= array();
		$user = DB::table('users')
		->join('user_profiles', 'user_profiles.user_id', '=', 'users.id')
		//->where('users.active','1')
		->where('users.id',$id)->get();
		return $user;
	}
	public static function editUser($request)
	{
		$user = new User;
		$user = User::find($request->input('id'));
		$user->first_name = $request->input('first_name');
		$user->last_name = $request->input('last_name');
		$user->email = $request->input('email');
		$user->active = $request->input('active');
		$user->role_id = $request->input('role_id');
		$user->team_id = $request->input('team_id');
		$user->save();

		$user_profile = new User_profile;
		$user_profile = User_profile::find($request->input('id'));
		$user_profile->username = $request->input('userName');
		$user_profile->entry_date = $request->input('entry_date');
		$user_profile->birth_date = $request->input('birth_date');
		$user_profile->save();
		\logFacade::log('51',$request->session()->get('user.id'));	
		return \userFacade::getUser($user->id);	
	}
	public static function saveUser($request,$psd)
	{
		$user = new User;
		$user->first_name = $request->input('first_name');
		$user->last_name = $request->input('last_name');
		$user->email = $request->input('email');
		$user->active = $request->input('active');
		$user->role_id = $request->input('role_id');
		$user->team_id = $request->input('team_id');
		$user->password = $psd;
		$user->save();

		$user_profile = new User_profile;
		$user_profile->username = $request->input('userName');
		$user_profile->entry_date = $request->input('entry_date');
		$user_profile->birth_date = $request->input('birth_date');
		$user_profile->photo = 'default.png';
		$user_profile->user_id = $user->id;
		$user_profile->save();
		\mailFacade::sendEmailPsd($user,$psd);
		\logFacade::log('50',$request->session()->get('user.id'));
	}
	//information to add User 
	public static function listRoles()
	{
		$rol = new Rol;
		$rol = Rol::all();		
		return $rol;
	}
	public static function listTeams()
	{	
		$team = new Team;
		$team = Team::all();		
		return $team;
	}
}
