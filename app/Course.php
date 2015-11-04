<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model {
	protected $table = 'courses';

	protected $fillable =['id','name','description','awarded_points','redeemable_points','rating','likes','active','badge_id','team_id','league_id','subject_id','parent_id'];
}
