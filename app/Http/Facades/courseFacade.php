<?php namespace App\Http\Facades;

use Illuminate\Support\Facades\Facade;
use DB;
use App\Course as Course;
use App\Module as Module;
use App\Lesson as Lesson;
use App\Resource as Resource;
use App\Resource_type as Resource_type;

class courseFacade extends Facade{
	public static function getAll()
	{
		$allCourses = array();
		$allCourses = DB::table('courses')
		->select('courses.id as id','courses.name as name','courses.description as description','awarded_points','likes','image','active')
		->join('badges', 'badges.id', '=', 'courses.badge_id')->get();
		return $allCourses;
	}
	public static function getCourse($id)
	{
		$course = array();
		$course = DB::table('courses')
		->select('courses.id as id','courses.name as name','courses.description as description','awarded_points','image','begin_date','end_date','active')
		->join('badges', 'badges.id', '=', 'courses.badge_id')
		->join('course_calendars', 'courses.id', '=', 'course_calendars.course_id')
		->where('courses.id',$id)->get();

		return $course;
	}
	public static function getModules($id)
	{
		$modules = array();
		$modules = DB::table('modules')
		->select('id as module_id','name as module_name','order')
		->where('course_id',$id)
		->orderBy('order','asc')
		->get();

		return $modules;
	}
	public static function getComments($id)
	{
		$comments = array();
		$comments = DB::table('course_comments')
		->select('course_comments.id as comment_id','first_name','last_name','comment','photo','course_comments.created_at as created_at')
		->join('users', 'course_comments.user_id', '=', 'users.id')
		->join('user_profiles', 'users.id', '=', 'user_profiles.user_id')
		->where('course_id',$id)
		->orderBy('comment_id','desc')
		->get();

		return $comments;
	}
	public static function getLesson($id, $od)
	{
		$lesson = array();
		$lesson = DB::table('lessons')
		->select('lessons.id as lesson_id','lessons.name as lesson_name','lessons.description as lesson_description','order as lesson_order','url','type_id')
		->join('resources', 'lessons.id', '=', 'resources.lesson_id')
		->where('module_id',$id)
		->where('order',$od)
		->get();

		return $lesson;
	}
	public static function getLessons($id)
	{
		$lessons = array();
		$lessons = DB::table('lessons')
		->select('modules.id as module_id','modules.name as module_name','modules.description as module_description','lessons.id as lesson_id','lessons.name as lesson_name','lessons.order as lesson_order','url','type_id','course_id')
		->join('resources', 'lessons.id', '=', 'resources.lesson_id')
		->join('modules', 'lessons.module_id', '=', 'modules.id')
		->where('module_id',$id)
		->orderBy('lesson_order','asc')
		->get();

		return $lessons;
	}
}
