<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
            'title'            => 'required|min:3|max:199|string',
            'description'      => 'required|min:3|string',
            'meta_keyword'     => 'required|min:3|string',
            'meta_description' => 'required|min:3|string',
            'facebook'         => 'required|max:25',
            'whatsApp'         => 'required|max:25',
            'phone'            => 'required|numeric',
            'email'            => 'required|email:rfc,dns|min:3|max:225',
            'location'         => 'required|min:3|max:225|string',
            'image'            => 'required|image',
        ];
    }

    protected function onUpdate()
    {
        return [
            'title'            => 'required|min:3|max:199|string',
            'description'      => 'required|min:3|string',
            'meta_keyword'     => 'required|min:3|string',
            'meta_description' => 'required|min:3|string',
            'facebook'         => 'required|max:25',
            'whatsApp'         => 'required|max:25',
            'phone'            => 'required|numeric',
            'email'            => 'required|email:rfc,dns|min:3|max:225',
            'location'         => 'required|min:3|max:225|string',
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
            'phone.required' => 'الهاتف مطلوب',
            'phone.max'      => 'يجب ان يكون الهاتف 11 رقماً',
            'phone.min'      => 'يجب ان يكون الهاتف 11 رقماً',
            'phone.integer'  => 'يجب أن يكون الهاتف عددًا صحيحًا.',
        ];
    }
}
