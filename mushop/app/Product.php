<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'user_id',
        'category_id',
        'description',
        'price',
        'quantity',
        'image',
        'reorder_point'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
        
    }
}
