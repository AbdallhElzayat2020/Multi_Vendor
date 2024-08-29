<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'store_id',
        'user_id',
        'store_id',
        'payment_status',
        'status',
        'payment_method'
    ];
    public function store()
    {
        return $this->belongsTo(Store::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class)->withDefault([
            'name' => 'Guest Customer',
        ]);
    }
    public function products()
    {
        return $this->belongsTo(Product::class, 'order_items', 'order_id', 'product_id', 'id', 'id')
            ->using(OrderItem::class)
            ->withPivot([
                'product_name',
                'price',
                'quantity',
                'options'
            ]);
    }
    public function billingAddress()
    {
        return $this->hasOne(OrderAdress::class, 'order_id', 'id')
            ->where('type', '=', 'billing');
    }
    public function shippingAddress()
    {
        return $this->hasOne(OrderAdress::class, 'order_id', 'id')
            ->where('type', '=', 'shipping');
    }
    public function address()
    {
        return $this->hasMany(OrderAdress::class);
    }
    protected static function booted()
    {
        static::creating(function (Order $order) {
            $order->number = Order::getNextOrderNUmber();
        });
    }

    public static function getNextOrderNUmber()
    {
        $year = Carbon::now()->year;
        $number = Order::whereYear('created_at', $year)->max('number');
        if ($number) {
            return $number + 1;
        }
        return $year . '0001';
    }
}
