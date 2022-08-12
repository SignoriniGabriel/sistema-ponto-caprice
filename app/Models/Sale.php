<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = ['total', 'user_id', 'status'];

    public function product_sale(){
        return $this->hasMany('App\Models\ProductSale');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
