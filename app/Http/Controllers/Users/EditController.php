<?php namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\User as User;

class EditController extends Controller
{
	public function index()
	{
		return view('users.new');
	}
	public function cargarUser(Request $request,$id)
	{				
		$user = \userFacade::getUser($id);
		return view('users/edit')->with('user',$user);
	}
	public function saveUser(Request $request)
	{
		$error = array();
		$message = array();
		try{
			$user = \userFacade::editUser($request);			
			array_push($message,"El usuario fue guardado exitosamente");
			return view('users/edit')->with('message',$message)->with('user',$user);
		}catch(Exception $e){
			array_push($error,"Ha ocurrido al tratar de guardar el usuario");
			echo 'Error en guardar usuario',  $e->getMessage(), "\n";
			return redirect('users/edit')->with('errors',$error);
		}		
	}

}