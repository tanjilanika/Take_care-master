<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table='customers';
    protected $fillable=['customer_name','mobile_number','customer_address','customer_type','purchase_items','product_category','purchase_amounts'];
}
