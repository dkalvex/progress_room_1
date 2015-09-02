<?php namespace App\Http\Controllers\Session;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class SessionController extends Controller
{
	public function updateUserProfile(Request $request)
	{
		$user_role = $request->session()->get('user.role_id');
		$status = true;
		if ($user_role==null || $user_role == ""){
			$status = false;
		}else{
			$rol = array();
			$rol =  DB::table('user_role')->where('id', '=',$user_role)->get();
			if (count($rol)>0){
				//Se guarda en session
				$request->session()->put('user.rol_name',$rol{0}->name);
									
				//Obtener Información del Perfil
				$profile = array();
				$profile =  DB::table('user_profile')->where('user_id',$request->session()->get('user.id'))->get();
									
				//Se guarda en la session
				if(count($profile)>0){
					$request->session()->put('user.photo',$profile{0}->photo);
					$request->session()->put('user.actual_points',$profile{0}->actual_points);
					$request->session()->put('user.redeemable_points',$profile{0}->redeemable_points);
					$request->session()->put('user.total_points',$profile{0}->total_points);
				}
			}
		}
		return $status;
	}

	public function updateUserData(Request $request)
	{
		$user_id = $request->session()->get('user.id');
		$user = DB::select("SELECT * FROM user WHERE  id = :id ",['id'=>$user_id]);

		//Si se consiguen datos del usuario se guardan en session
		if (count($user)>0){
			$request->session()->put('user.first_name',$user{0}->first_name);
			$request->session()->put('user.last_name',$user{0}->last_name);
			$request->session()->put('user.active',$user{0}->active);
			$request->session()->put('user.email',$user{0}->email);
			$request->session()->put('user.password',$user{0}->password);
			$request->session()->put('user.remember_token',$user{0}->remember_token);
			$request->session()->put('user.role_id',$user{0}->role_id);
			$request->session()->put('user.team_id',$user{0}->team_id);
			$request->session()->put('user.level_id',$user{0}->level_id);
			$status = true;
		}else{
			$status = false;
		}
		return $status;
	}
	public function logout(Request $request)
	{
		$request->session()->flush();
		return redirect("home");
	}
}