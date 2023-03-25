<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{   
    public $timestamps = false;
    protected $table = 'orders';
    protected $fillable = [
        'order_id','order_code','customer_name','customer_address','customer_phone','status','created_at',
    ];
}
