<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = [
        'amount',
        'product_id',
    ];
    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}
