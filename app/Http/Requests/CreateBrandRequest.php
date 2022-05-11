<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBrandRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'brand_name'   => 'required',
            'company_name' => 'required',
            'image_id'     => 'required',
            'country_name' => 'required'
        ];
    }
}
