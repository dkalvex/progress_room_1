<?php namespace App\Http\Controllers\Login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Session\SessionController;
use DB;
use App\User as User;

class LoginController extends Controller{
	public function __construct()
	{
		//$this->middleware('auth');
	}
	public function login(Request $request)
	{
		$view = "/";
		$errors = array();
		$user = new User;
		$user->email = 	$request->input('email');
		$user->password = $request->input('password');
		$user->remember_token = $request->input('_token');
		echo $user->email." ".$user->password;
		if (\Auth::attempt(['email' => $user->email, 'password' => $user->password ,'active' => 1]))
		{
			$request->session()->put('user.id',\Auth::user()->id);
			$session = new SessionController;			
			$session->updateUserData($request);
			$session->updateUserProfile($request);	
		}else{
			array_push($errors,"Email ó Contraseña incorrectos");
						$view = "Auth/login";
		}	
	}			
}