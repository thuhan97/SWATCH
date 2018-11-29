<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
  protected $table='customers';
  protected $fillable=[
  	'name','address','phone','email','gender',
  ];
  public function order()
    {
        return $this->hasMany(Order::class,'customer_id','id');
    }
    

}
