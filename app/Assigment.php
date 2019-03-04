<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assigment extends Model
{
    protected $table = 'assignments';
    protected $fillable = ['captain_id', 'user_id', 'subject', 'description'];
}
