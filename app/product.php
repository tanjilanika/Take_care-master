<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table='products';
    protected $fillable=['product_img','product_name','product_type','product_category','product_price'];
}
