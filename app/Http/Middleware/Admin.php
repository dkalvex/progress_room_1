<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Routing\Middleware;
class Admin{

	public function handle($request, Closure $next)
	{
		$user_rol = $request->session()->get('user.role_id');
        if ($user_rol != null and $user_rol !="")
        {
			if($user_rol == '3'){
				return redirect("home/index");
			}            
        }else{
        	\sessionFacade::logout($request);        	
        	return redirect('home');	
        }      
		return $next($request);	
	}
}