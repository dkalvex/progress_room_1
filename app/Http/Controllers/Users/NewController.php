<?php namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\User as User;

class NewController extends Controller
{
	public function index()
	{
		return view('users.new');
	}
	public function saveUser(Request $request)
	{
		$error = array();
		$message = array();
		try{
			$psd = str_random(6);
			$status = \userFacade::saveUser($request,$psd);			
			array_push($message,"El usuario fue guardado exitosamente");
			return view('users/new')->with('message',$message);
		}catch(Exception $e){
			array_push($error,"Ha ocurrido al tratar de guardar el usuario");
			echo 'Error en guardar usuario',  $e->getMessage(), "\n";
			return redirect('users/new')->with('errors',$error);
		}		
	}

}