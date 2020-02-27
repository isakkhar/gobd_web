<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $fillable = [
      'product_name', 'priority', 'order_status','office','payment_type','product_weight','product_quantity','customer_name','customer_phone','customer_address'
  ];


}
