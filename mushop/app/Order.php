<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['date', 'client_id', 'total_amount', 'user_id'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function products()
    {
        return $this->belongsToMany(
            Product::class, 
        'order_details', 
        'order_id', 
        'product_id')->withTimestamps();
    }
}
