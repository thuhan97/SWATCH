<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Category;

class Brand extends Model
{
    protected $table='brands';
    protected $fillable = [
        'name','category_id','image','slug',
    ];
    public $timestamp=true;
    public function product()
        {
            return $this->hasMany(Product::class,'brand_id','id');
        }
    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
