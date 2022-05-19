<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'buyer_name',
        'product_name',
        'product_image',
        'product_price'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function car(){
        return $this->belongsTo(Car::class);
    }



}
