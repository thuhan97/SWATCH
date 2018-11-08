<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table='brands';
    protected $fillable = [
        'name','country','image',
    ];
    public $timestamp=true;
    public function product()
        {
            return $this->hasMany(Product::class,'brand_id','id');
        }
}
