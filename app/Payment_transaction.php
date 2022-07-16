<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment_transaction extends Model
{
    protected $guarded =['id'];
    protected $fillable = [
         'user_id',
         'type',
         'price',
         'status',
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
