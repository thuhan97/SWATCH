<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table='shopping_cart';
    public $timestamp=true;
}
