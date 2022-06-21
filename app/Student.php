<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Student extends Model
{
    //
    protected $guarded  = ['id'];
    public function courses(){
        return $this->belongsToMany('App\Course')->withPivot('status');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
