<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'user_id', 'first_name', 'last_name', 'birthday', 'local',
        'gender', 'street_address', 'city', 'state', 'postal_code', 'country',

    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'user_id');
    }
}
