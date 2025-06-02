<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    protected static function booted()
    {
        static::creating(function ($category) {
            $category->slug = str($category->name)->slug();
        });
        static::updating(function ($category) {
            $category->slug = str($category->name)->slug();
        });
        static::deleting(function ($category) {
            $category->products()->each->delete();
        });
    }
}
