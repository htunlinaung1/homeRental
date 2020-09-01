<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paymenttype extends Model
{
    use SoftDeletes;
    protected $fillable=[
    	'name'
    ];
    public function rooms()
    {
    	return $this->hasMany('App\Paymenttype');
    }
}
