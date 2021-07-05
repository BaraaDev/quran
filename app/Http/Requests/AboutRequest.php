<?php

namespace App\Http\Requests;

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


    protected function onCreate()
    {
        return [
            'title'   => 'required|min:3|max:199|string',
            'content' => 'required|min:3|string',
            'image'   => 'required|image|mimes:jpeg, png'
        ];
    }

    protected function onUpdate()
    {
        return [
            'title'   => 'required|min:3|max:199|string',
            'content' => 'required|min:3|string',
        ];
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return request()->isMethod('put') || request()->isMethod('patch') ?
            $this->onUpdate() : $this->onCreate();
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
