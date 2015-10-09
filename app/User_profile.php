<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class User_profile extends Model {

	protected $table = 'user_profiles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable =['username', 'last_name','photo','total_points','actual_points','redeemable_points','bio','twitter','facebook','google','user_id','google','linkedin'];
}
