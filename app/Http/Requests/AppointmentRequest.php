<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
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

    public function rules()
    {
        return [
            'title'      => 'required|min:3|max:199|string',
            'content'    => 'required|min:3|string',
            'user'       => 'required',
            'status'     => 'required|in:0,1|numeric',
        ];
    }

}
