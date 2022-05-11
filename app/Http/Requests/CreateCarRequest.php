<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCarRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'model_name'  => 'required',
            'price'       => 'required',
            'color'       => 'required',
            'noOfSeats'   => 'required',
            'warrenty'    => 'required',
            'mileage'     => 'required|max:80',
            'tank_size'   => 'required|max:100',
            'brand_id'    => 'required',
            'fuel_type'   => 'required',
            'condition'   => 'required',
            'gear_type'   => 'required',
            'image_id'    => 'required',
            'description' => 'required'
        ];
    }
}
