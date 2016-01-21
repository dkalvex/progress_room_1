<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model {

	    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'modules';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable =['name', 'description','order','questions','required_score','attempts','course_id'];

}
