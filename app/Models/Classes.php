<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classes extends Model
{

    protected $guarded = ['id'];

    public function teacher()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function courses()
    {
        return $this->belongsToMany('App\Models\Course','sections_courses');
    }

    public function students()
    {
    	return $this->hasMany('App\Models\Student');
    }

}
