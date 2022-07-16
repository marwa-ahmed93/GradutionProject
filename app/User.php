<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Student;
use App\Professor;
use App\Employee;
use App\Admin;
use App\Payment_transaction;
class User extends Authenticatable
{
 

    public function student()
    {
        return $this->hasOne('App\Student');
    }
    public function professor()
    {
        return $this->hasOne('App\Professor');
    }
    public function employee()
    {
        return $this->hasOne('App\Employee');
    }
    public function admin()
    {
        return $this->hasOne('App\Admin');
    }

    public function payment_transaction()
    {
        return $this->hasMany('App\Payment_transaction');
    }

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'code', 'img' ,'gender',
        'role' , 'phone','birthDate' ,'socialState' ,
        'city' ,'identityNumder' ,'identityType' ,
        'isBlocked' ,'isActive'
    ]; 

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
