<?php namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class AllController extends Controller
{
	public function index(Request $request)
	{
		$userAll = $this->listarTodos();
		return view("users/all",['userAll'=>$userAll]);
	}
	public function listarTodos()
	{
		$allUsers= array();
		$allUsers = DB::table('user')->where('active','1')->get();
		return $allUsers;
	}
}