<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Electrical_desier extends Model
{
    //
    protected $guarded  = ['id'];
    protected $fillable = [
        'name' ,
        'national_id '  ,
        'seat_number ' , 
        'your_desire ' ,
       
    ];
}
