<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    
    public function profile(){
        return $this->hasOne('App\Profile', 'user_id', 'id' );
    }
    public function vehicles(){
        return $this->hasMany('App\Vehicle', 'user_id', 'id');
    } 
    
    public function orders(){
        return $this->hasMany('App\Order', 'user_id'); 
    }    
    public function order_products(){
        return $this->hasMany('App\OrderProduct', 'user_id'); 
    }   
    public function payments(){
        return $this->hasMany('App\Payment', 'user_id'); 
    }

 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role',
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
