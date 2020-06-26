<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseOption extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'status', 'course_category_id', 'order'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at', 'order'
    ];

    public function courseCategories()
    {
        return $this->belongsTo(CourseCategory::class, 'course_category_id');
    }

    public function userCourseOptions()
    {
        return $this->hasMany(UserCourseOption::class, 'course_option_id');
    }
}
