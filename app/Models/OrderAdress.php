<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderAdress extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'type',
        'first_name',
        'last_name',
        'email',
        'street_address',
        'country',
        'phone_number',
        'city',
        'state',
        'postal_code'
    ];

    
}
