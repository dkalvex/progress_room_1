<?php namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class CreateUserController extends Controller
{
	public function index()
	{
		return view('users.createUser');
	}

}