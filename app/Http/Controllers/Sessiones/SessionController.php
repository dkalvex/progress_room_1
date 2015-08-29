<?php namespace App\Http\Controllers\SessionController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class SessionController extends Controller
{
	public function loguin(Request $request)
	{
		$view = "/";
		$errors = array();
		$user = array();
		$password = $request->input('password');
		$email = $request->input('email');
		if($password!=null and $password!=""){
			if($email!=null and $email!=""){				
				$user = DB::select("SELECT * FROM user WHERE  email = :email ",['email'=>$email]);
				if (count($user) > 0){
					if(\Hash::check($password,$user{0}->password)){
						if($user{0}->active != '1'){
							array_push($errors,"El usuario no se encuentra activo");
							$view = "Auth/login";
						}else
						{
							$view = "/";
							//Se guardan en session la información del usuario
							$request->session()->put('user.id',$user{0}->id);
							$request->session()->put('user.first_name',$user{0}->first_name);
							$request->session()->put('user.last_name',$user{0}->last_name);
							$request->session()->put('user.active',$user{0}->active);
							$request->session()->put('user.email',$user{0}->email);
							$request->session()->put('user.password',$user{0}->password);
							$request->session()->put('user.remember_token',$user{0}->remember_token);
							$request->session()->put('user.role_id',$user{0}->role_id);
							$request->session()->put('user.team_id',$user{0}->team_id);
							$request->session()->put('user.level_id',$user{0}->level_id);
							$rol =  DB::table('user_role')->where('id', '=',$user{0}->role_id)->get();
							if ($rol != null){
								//Se guarda en session
								$request->session()->put('user.rol_name',$rol{0}->name);
								
								//Obtener Información del Perfil
								$profile = array();
								$profile =  DB::table('user_profile')->where('user_id',$user{0}->id)->get();
								
								//Se guarda en la session
								if($profile!=null){
									$request->session()->put('user.photo',$profile{0}->photo);
									$request->session()->put('user.actual_points',$profile{0}->actual_points);
									$request->session()->put('user.redeemable_points',$profile{0}->redeemable_points);
									$request->session()->put('user.total_points',$profile{0}->total_points);
								}
							}
							//se valida el rol del usaurio
							if($request->session()->get('user.role_id') == '3'){
								$view="player/home";
							}else{
								$view="admin/home";
							}
							return view($view)->with('user',$request->session()->get('user'));
						}
					}else{
						array_push($errors,"Email ó Password incorrectos");
						$view = "Auth/login";
					}			
				}else{
					array_push($errors,"Email ó Password incorrectos");
					$view = "Auth/login";
				}				
			}
				
		}
		
		//Errores
		if ($password == null and $password == "")
		{
			array_push($errors,"El campo password es obligatorio");
			$view = "Auth/login";
		}
		if ($email == null and $email == "")
		{
			array_push($errors,"El campo email es obligatorio");
			$view = "Auth/login";
		}
		return View($view)->with('errors',$errors);
	}

}