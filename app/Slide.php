<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Slide_img;
class Slide extends Model
{
    //
    public function img()
    {
        return $this->hasMany('App\Slide_img', 'department_id', 'slide_id');
    }
}
