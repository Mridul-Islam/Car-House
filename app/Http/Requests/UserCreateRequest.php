<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name'     => 'required|max:50',
            'email'    => 'required|email',
            'role_id'  => 'required',
            'image_id' => 'required',
            'password' => 'required|min:8'
        ];
    }
}
