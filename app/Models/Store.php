<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->hasMany(Product::class, 'store_id', 'id');
    }

//    to choose the database connection
//    protected $connection='mysql';

//    to rename primaryKey
//    protected $primaryKey='id';

//   to make primaryKey increment
//   public $incrementing = true;

//   to make timestamp  false
//   public $timestamp = false;

//   to change keyType
//    protected $keyType = 'int';

    protected $table = "stores";
}
