<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Badge extends Model {
	protected $table = 'badges';

	protected $fillable =['id','name','description','image','league_id'];
}
