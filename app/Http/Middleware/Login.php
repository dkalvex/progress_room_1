<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Routing\Middleware;
class Login{

	public function handle($request, Closure $next)
	{
		$user_id = $request->session()->get('user.id');

        if ($user_id!=null and $user_id!="")
        {
			if($request->session()->get('user.role_id') == '3'){
				$view = "home/index";
			}else{
				$view = "home/dashboard";
			}
            return redirect($view);
        }
		return $next($request);	
	}
}