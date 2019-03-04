<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Captain extends Model
{
    public function images()
    {
        return $this->belongsToMany('App\Image', 'captain_image');
    }
}
