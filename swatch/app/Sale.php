<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    //
    protected $table='sales';
    protected $fillable=['product_id','discount','start_at','end_at',];
    public $timestamp=true;
    public product(){
    	return $this->belongsTo(Product::class,'product_id','id')
    }
}
