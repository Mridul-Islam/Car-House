<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'model_name',
        'price',
        'brand_id',
        'color',
        'noOfSeats',
        'warrenty',
        'image_id',
        'mileage',
        'fuel_type',
        'tank_size',
        'condition',
        'gear_type',
        'description'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function photo(){
        return $this->belongsTo(Image::class);
    }

    public function brand(){
        return $this->belongsTo(Brand::class);
    }



}// End of class
