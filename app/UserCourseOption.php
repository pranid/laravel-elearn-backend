<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserCourseOption extends Model
{
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'course_option_id'
    ];

    public function courseOptions()
    {
        return $this->belongsTo(CourseOption::class, 'course_option_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
