<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_name',
        'company_name',
        'image_id',
        'country_name'
    ];

    public function cars(){
        return $this->hasMany(Car::class);
    }

    public function image(){
        return $this->belongsTo(Image::class);
    }


}// End of class
