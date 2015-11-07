<?php namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\User as User;

class AllController extends Controller
{
	public function index(Request $request)
	{
		$users= \userFacade::getAll();
		return view("users/all",['userAll'=>$users]);
	}
	public static function validateEmail(Request $request)
	{
		$email = array();
		$email = DB::table('users')
		->where('email',$request->input('email'))
		->where('active','1')->get();
		if(count($email)>0){
			return count($email);
		}
		return count($email);
	}
	public static function deleteUser(Request $request)
	{
		$ids = $request->input('select_id');
		$valores = explode(",",$ids);
		foreach ($valores as $valor ) {
			\userFacade::deleteUser($valor);
		}
		return "Usuarios eliminados correctamente";	
	}
}