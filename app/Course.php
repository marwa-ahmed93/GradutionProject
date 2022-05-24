<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $guarded  = ['id'];
   

    public function professor(){
        return $this->belongsTo('App\Professor');
            }

            public function students(){
                return $this->belongsToMany('App\Student');
            }
}
