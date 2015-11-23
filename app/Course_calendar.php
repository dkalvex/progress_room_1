<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Course_calendar extends Model {
	protected $table = 'course_calendars';

	protected $fillable =['id','begin_date','end_date','course_id'];
}
