<?php namespace App\Http\Facades;

use Illuminate\Support\Facades\Facade;
use Illuminate\Http\Request;
use DB;
use App\User as User;
use App\User_rol as User_rol;
use App\User_profile as User_profile;
class sessionFacade extends Facade{
	public static function updateUserProfile(Request $request)
	{
		$status = true;
		$user_role = $request->session()->get('user.role_id');		
		if ($user_role==null || $user_role == ""){
			$status = false;
		}else{
			$rol = User_rol::find($user_role);		
			if (count($rol)>0){
				//Se guarda en session
				$request->session()->put('user.rol_name',$rol->name);
									
				//Obtener Información del Perfil
				$profile = User_profile::where('user_id','=', $request->session()->get('user.id'))->first();						
				//Se guarda en la session
				if(count($profile)>0){
					$request->session()->put('user.photo',$profile->photo);
					$request->session()->put('user.actual_points',$profile->actual_points);
					$request->session()->put('user.redeemable_points',$profile->redeemable_points);
					$request->session()->put('user.total_points',$profile->total_points);
				}
			}
		}
		return $status;
	}
	public static function updateUserData(Request $request)
	{
		//$user_id = $request->session()->get('user.id');
		$status = true;
		$user = User::find($request->session()->get('user.id'));		
		//Si se consiguen datos del usuario se guardan en session
		if (count($user)>0){
			$request->session()->put('user.first_name',$user->first_name);
			$request->session()->put('user.last_name',$user->last_name);
			$request->session()->put('user.active',$user->active);
			$request->session()->put('user.email',$user->email);
			$request->session()->put('user.password',$user->password);
			$request->session()->put('user.role_id',$user->role_id);
			$request->session()->put('user.team_id',$user->team_id);
			$request->session()->put('user.level_id',$user->level_id);
			
		}else{
			$status = false;
		}
		return $status;
	}
	public static function logout(Request $request)
	{
		$request->session()->flush();		
	}
}