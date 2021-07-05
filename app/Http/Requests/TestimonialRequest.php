<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialRequest extends FormRequest
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
            'name'       => 'required|min:3|max:199|string',
            'job'        => 'required|min:3|max:199|string',
            'content'    => 'required|min:3|max:250|string',
            'user'       => 'required',
            'status'     => 'required|in:0,1|numeric',
            'image'      => 'required|image|mimes:jpeg, png'
        ];

    }

    protected function onUpdate()
    {
        return [
            'name'       => 'required|min:3|max:199|string',
            'job'        => 'required|min:3|max:199|string',
            'content'    => 'required|min:3|max:250|string',
            'user'       => 'required',
            'status'     => 'required|in:0,1|numeric',
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

}
