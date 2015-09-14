<?php namespace App\Http\Controllers\Login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Http\Controllers\Session\SessionController;

class LoginController extends Controller
{
	protected $users;
	public function __construct($value='')
	{
		//$this->middleware('session');
	}
	public function user(Request $request){
		$this->users = $request->session()->get('user.id');
	}
	public function login(Request $request)
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
							
							$session = new SessionController;
							
							$session->updateUserData($request);
							$session->updateUserProfile($request);
							//se valida el rol del usaurio
							if($request->session()->get('user.role_id') == '3'){
								$view = "home/home";
							}else{
								$view = "home/dashboard";
							}
							return redirect($view);
						}
					}else{
						array_push($errors,"Email ó Contraseña incorrectos");
						$view = "Auth/login";
					}			
				}else{
					array_push($errors,"Email ó Contraseña incorrectos");
					$view = "Auth/login";
				}				
			}
				
		}
		
		//Errores
		if ($password == null and $password == "")
		{
			array_push($errors,"El campo contraseña es obligatorio");
			$view = "Auth/login";
		}
		if ($email == null and $email == "")
		{
			array_push($errors,"El campo email es obligatorio");
			$view = "Auth/login";
		}
		return view($view)->with('errors',$errors);
	}

}