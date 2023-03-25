<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    public $timestamps = false;
    protected $table = 'order_details';
    protected $fillable = [
        'order_detail_id','order_id','product_code','product_name','product_price','product_quantity_sale','product_img'
    ];
}
