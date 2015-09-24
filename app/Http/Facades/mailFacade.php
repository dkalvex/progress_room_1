<?php namespace App\Http\Facades;

use Illuminate\Support\Facades\Facade;
use DB;
class mailFacade extends Facade{
	public static function sendEmailPsd($user,$psd)
	{
		\Mail::send('emails.welcome',['user' => $user,'psd' => $psd], function ($message) use ($user) {
			$message->from('dkalvex@gmial.com', 'Proggess_rom');
			$message->to($user->email)->subject('your password');
		});
	}
}