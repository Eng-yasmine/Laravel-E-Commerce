<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'category_id',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function getImageUrlAttribute()
    {
        return $this->image ? asset('storage/' . $this->image) : asset('images/default-product.png');
    }
    public function getIsActiveAttribute($value)
    {
        return (bool) $value;
    }
    public function setIsActiveAttribute($value)
    {
        $this->attributes['is_active'] = (bool) $value;
    }
    public function getStockAttribute($value)
    {
        return (int) $value;
    }
    public function setStockAttribute($value)
    {
        $this->attributes['stock'] = (int) $value;
    }

    protected static function booted()
    {
        static::creating(function($product){
            $product->slug = str($product->slug)->slug();
        });
        static::updating(function($product){
            $product->slug = str($product->slug)->slug();
        });
    }
}
