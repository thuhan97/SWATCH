<?php

namespace App;
use App\Brand;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table='categories';
    protected $fillable = [
        'name',
    ];
    public $timestamp=true;
    public function brand(){
        return $this->hasMany(Brand::class,'category_id','id');
    }

}
