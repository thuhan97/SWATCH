<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table='products';
    protected $fillable = [
        'name','image','price','size','brand_id','category_id','shell_material','chain_material','glass_material','persure','guarantee','description',
    ];
    public $timestamp=true;
    public function category()
        {
            return $this->belongsTo(Category::class,'category_id','id');
        }
    public function brand()
        {
            return $this->belongsTo(Brand::class,'brand_id','id');
        }
    public function sale()
        {
            return $this->hasMany(Sale::class,'product_id','id');
        }
    public function comment()
        {
            return $this->hasMany(Comment::class,'product_id','id');
        }
}
