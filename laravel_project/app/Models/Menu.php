<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'category',
        'image',
        'is_available',
        'image_url'
    ];

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
