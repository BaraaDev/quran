<?php

namespace App\Http\Requests\About;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
            'title'   => 'required|min:3|max:199|string',
            'content' => 'required|min:3|string',
            'image'   => 'required|image|mimes:jpeg, png',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'image.image'  => 'يجب ان تكون صورة',
            'image.mimes'  => 'يجب ان تكون صورة من نوع "jpeg, png"',
        ];
    }
}
