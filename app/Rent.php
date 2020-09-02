<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rent extends Model
{
     use SoftDeletes;
    protected $fillable=[
    	'codeno','date','duration','amount','paymenttype_id','room_id','user_id'
    ];
    public function room()
    {
    	return $this->belongsTo('App\Room');
    }
    public function paymenttypes()
    {
    	return $this->hasMany('App\Paymenttype');
    }
}
