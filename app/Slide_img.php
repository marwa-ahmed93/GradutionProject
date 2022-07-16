<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Slide;
class Slide_img extends Model
{
    //
    public function slideImg()
    {
        return $this->belongsTo('App\Slide');
    }
}
