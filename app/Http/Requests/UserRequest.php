<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'        => 'required|min:3|max:199|string',
            'phone'       => 'required',
            'email'       => 'required|email:rfc,dns|min:3|max:225',
            'password'    => 'required|confirmed|min:11|max:199|string',
            'is_admin'    => 'required|in:user,admin|string',
            'status'     => 'required|in:0,1|numeric',
        ];
    }
}
