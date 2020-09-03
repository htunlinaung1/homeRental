<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Room extends Model
{
    use SoftDeletes;
    protected $fillable=[
    	'name','photo','Description','category_id','city_id','user_id'
    ];
    public function category()
    {
    	return $this->belongsTo('App\Category');
    }
     public function city()
    {
    	return $this->belongsTo('App\City');
    }
      public function rents()
    {
        return $this->hasMany('App\Room');
    }
      public function user()
    {
        return $this->belongsTo('App\User');
    }

    	


}
