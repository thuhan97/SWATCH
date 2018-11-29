<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Sale;
use App\Brand;

class Product extends Model
{
    //
    protected $table='products';
    protected $fillable = [
        'name','image','price','size','brand_id','gender','shell_material','chain_material','glass_material','presure','guarantee', 'description','status','special',
    ];
    public $timestamp=true;
    
        
    public function brand()
        {
            return $this->belongsTo(Brand::class,'brand_id','id');
        }
    public function sale()
        {
            return $this->hasOne(Sale::class,'product_id','id');
        }
    public function comment()
        {
            return $this->hasMany(Comment::class,'product_id','id');
        }
    public function product() {
    return $this->hasOne('Product', 'Brand');
}
}
