<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class User_rol extends Model {

	protected $table = 'user_rols';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable =['name', 'description'];

}
