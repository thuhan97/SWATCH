<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table='order_details';
    protected $fillable=[
    	'order_id','product_id','unit_price','quantity'
    ];
    public function product()
    {
        return $this->belongsTo(Product::class,'product_id','id');
    }
    public function order()
    {
        return $this->belongsTo(Order::class,'order_id','id');
    }

}
