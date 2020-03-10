<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillabel = [
        'filename',
    ];

    public function photoable()
    {
        return $this->morphTo('App\Photo');
    }
}
