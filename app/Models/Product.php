<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'category_id',
        'price',
        'minimum_stock',
        'maximum_stock',
        'image',
        'status',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
