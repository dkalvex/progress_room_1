<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
class loginSession{

	public function handle($request, Closure $next)
	{
		if ($request->session()->has('user.id')){
			return redirect('home');
		}else{
			return view('Auth/login');
		}
		return $next($request);	
	}

}