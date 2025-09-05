<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'cart_id', 'total',];

    public function items()
    {
         return $this->hasMany(OrderItem::class);    
    }
    
    public function cart() 
    {
         return $this->belongsTo(Cart::class);
    }
    
    public function user() 
    {
         return $this->belongsTo(User::class);
    }
}
