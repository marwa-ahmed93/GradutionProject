<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class certificateEn extends Model
{
    //
    protected $guarded  = ['id'];
    protected $fillable = [
        'grade', 'nameInA', 'nameInE', 'department', 'gradeD' ,'year',
        'month' , 'id_card','release_date' ,'release_place' ,
        'birth_date' ,'birth_place' ,
        'projectNameInArabic' ,
        'EgyptionOrNot' ,'img_PreviousCertificateFile' , 'img_NationalIdFile',
        'img_PaymentReceipt'
    ]; 

}
