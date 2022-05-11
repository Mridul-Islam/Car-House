<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBrandRequest extends FormRequest
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
            'country_name' => 'required'
        ];
    }
}
