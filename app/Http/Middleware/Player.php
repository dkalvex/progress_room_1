<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Routing\Middleware;
class Player{

	public function handle($request, Closure $next)
	{
		$user_rol = $request->session()->get('user.role_id');
        if ($user_rol != null and $user_rol !="")
        {
			if($user_rol == '2'){
				return redirect("home/dashboard");
			}
			if($user_rol == '1'){
				return redirect("home/dashboard");
			}            
        }else{   
        	$request->session()->flush();     	
        	return redirect('home');	
        }      
		return $next($request);	
	}
}