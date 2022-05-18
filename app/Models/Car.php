<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'model_name',
        'price',
        'brand_id',
        'color',
        'noOfSeats',
        'fuel_tank_capacity',
        'image_id',
        'mileage',
        'fuel_type',
        'engine_type',
        'condition',
        'gear_type',
        'description'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function image(){
        return $this->belongsTo(Image::class);
    }

    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function carts(){
        return $this->hasMany(Cart::class);
    }



}// End of class
