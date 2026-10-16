<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Product extends Model
{
    protected $fillable = ['category_id', 'code', 'name', 'unit', 'price', 'stock'];

    protected function formattedPrice(): Attribute
    {
        return Attribute::make(
            get: fn (mixed $value, array $attributes) => 'Rp ' . number_format($attributes['price'], 0, ',', '.')
        );
    }

    protected function totalStockValue(): Attribute
    {
        return Attribute::make(
            get: fn (mixed $value, array $attributes) => ($attributes['price'] ?? 0) * ($attributes['stock'] ?? 0)
        );
    }

    protected function stockStatus(): Attribute
    {
        return Attribute::make(
            get: function (mixed $value, array $attributes) {
                $threshold = config('inventory.low_stock_threshold', 10);
                $stock = $attributes['stock'] ?? 0;

                if ($stock <= 0) {
                    return 'habis';
                }

                if ($stock < $threshold) {
                    return 'menipis';
                }

                return 'aman';
            }
        );
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
 
    public function transactionDetails()
    {
        return $this->hasMany(TransactionDetail::class);
    }
}
