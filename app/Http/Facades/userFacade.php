<?php namespace App\Http\Facades;

use Illuminate\Support\Facades\Facade;
use DB;
use App\User as User;
use App\User_profile as User_profile;
use App\User_rol as Rol;
use app\Team as Team;
class userFacade extends Facade{
	public static function getAll()
	{
		$allUsers= array();
		$allUsers = DB::table('users')
		->select('users.id','first_name','last_name','user_roles.name as rol','email','active','team_id','level_id')
		->join('user_roles', 'user_roles.id', '=', 'users.role_id')
		->where('users.active','1')->get();
		return $allUsers;
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
		$user_profile->photo = 'default.png';
		$user_profile->user_id = $user->id;
		$user_profile->save();
		\mailFacade::sendEmailPsd($user,$psd);
		\logFacade::log('50',$request->session()->get('user.id'));
	}
	//information to add User 
	public static function listRoles()
	{
		/*$rol = Rol::all();
		if (count($rol)>0)
		{
			return $rol;
		}*/
		return "Ninguno";
	}
	public static function listTeams()
	{
		$team = Team::all()
		if (count($team) > 0)
		{
			return $team;
		}
		return [{"Ninguno"}];
	}
}
