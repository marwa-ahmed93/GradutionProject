<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Primary_desier extends Model
{
    //
    protected $guarded  = ['id'];
    protected $fillable = [
        'name' ,
        'national_id '  ,
        'seat_number ' , 
        'first_desire ' ,
        'second_desire' ,
        'third_desire '  ,
        'fourth_desire ' ,
    ];

}
