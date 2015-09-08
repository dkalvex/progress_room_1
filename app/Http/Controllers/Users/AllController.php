<?php namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class AllController extends Controller
{
	public function index(Request $request)
	{
		$userAll = \userFacade::getAll();
		return view("users/all",['userAll'=>$userAll]);
	}
}