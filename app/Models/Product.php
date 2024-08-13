<?php

namespace App\Models;

use App\Models\Scopes\StoreScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function store()
    {
        return $this->belongsTo(Store::class, 'store_id', 'id');
    }

    protected static function booted()
    {
        static::addGlobalScope(new StoreScope);
    }

    public function tags()
    {
//        return $this->belongsToMany(
        return $this->hasMany(
            Tag::class,
            'product_tag',
            'product_id',

        );
    }
}
