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
}