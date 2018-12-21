<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table='orders';
    protected $fillable=[
    	'customer_id','total_quantity','total_price','date_order','status',
    ];
     public function customer()
    {
        return $this->belongsTo(Customer::class,'customer_id','id');
    }

    public function orderDetail(){
    	return $this->hasMany(OrderDetail::class,'order_id','id');
    }

}
