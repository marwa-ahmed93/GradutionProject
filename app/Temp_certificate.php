<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temp_certificate extends Model
{
    //
    protected $guarded  = ['id'];
    protected $fillable = [
        'nameInA', 'nameInE', 'department', 'grade', 'year' ,'month',
        'id_card' , 'release_date','release_place' ,'birth_date' ,
        'birth_place' ,'projectNameInArabic' ,'projectNameInE' ,
        'phone_number' ,'certificate_number'
    ]; 

}
