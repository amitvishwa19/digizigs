<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classes extends Model
{

    protected $guarded = ['id'];

    public function user()
    {
        //return $this->belongsTo('App\Models\Tag');
        return $this->belongsTo('App\User','user_id');
    }

}
