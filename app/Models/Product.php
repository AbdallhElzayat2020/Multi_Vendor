<?php

namespace App\Models;

use App\Models\Scopes\StoreScope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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
        static::addGlobalScope(new StoreScope());
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


//    scope for filter product with status
    public function scopeActive(Builder $builder): void
    {
        $builder->where('status', 'active');
    }


//    Accessors Function
    public function getImageUrlAttribute(): string
    {
        if (!$this->image) {
            return 'http://www.jbowenspottery.com/wp-content/uploads/2015/07/default-product.png';
        }
        if (Str::startsWith($this->image, ['http://', 'https://'])) {
            return $this->image;
        }
        return asset($this->image);
    }

    public function getSalePercentAttribute(): float|int
    {
        if (!$this->compare_price) {
            return 0;
        }
//        200 - 150 /200 * 100
        return number_format((($this->compare_price - $this->price) / $this->compare_price) * 100, 1);
    }
}
