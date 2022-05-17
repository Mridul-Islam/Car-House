<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCarRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'model_name'         => 'required',
            'price'              => 'required',
            'color'              => 'required',
            'noOfSeats'          => 'required',
            'fuel_tank_capacity' => 'required',
            'mileage'            => 'required|max:80',
            'engine_type'        => 'required',
            'brand_id'           => 'required',
            'fuel_type'          => 'required',
            'condition'          => 'required',
            'gear_type'          => 'required',
            'description'        => 'required'
        ];
    }
}
