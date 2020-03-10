<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'title',
        'status',
        'link'
    ];

    public function photo()
    {
        return $this->morphTo('App\Photo' , 'photoable');
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function quizzes()
    {
        return $this->hasMany('App\Quiz');
    }

    public function track()
    {
        return $this->belongsToMany('App\Track');
    }

    public function viseos()
    {
        return $this->hasMany('App\Video');
    }


}
