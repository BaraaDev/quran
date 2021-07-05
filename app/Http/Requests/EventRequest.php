<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'title'           => 'required|min:3|max:199|string',
            'description'     => 'required|min:3|max:150|string',
            'link'            => 'required|min:3|url',
            'appointment_id'  => 'required',
            'category_id'     => 'required',
            'user'            => 'required',
            'status'          => 'required|in:0,1|numeric',
            'image'           => 'required|image|mimes:jpeg,png'
        ];

    }

    protected function onUpdate()
    {
        return [
            'title'           => 'required|min:3|max:199|string',
            'description'     => 'required|min:3|max:150|string',
            'link'            => 'required|min:3|url',
            'appointment_id'  => 'required',
            'category_id'     => 'required',
            'user'            => 'required',
            'status'          => 'required|in:0,1|numeric',
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
