<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function order(){
        return $this->belongsTo('App\Order', 'order_id'); 
    }
    public function user(){
        return $this->belongsTo('App\User', 'user_id'); 
    }

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'payments';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['total', 'user_id', 'order_id', 'slip'];

    
}
