<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Professor extends Model
{
    //
    protected $guarded  = ['id'];


    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
