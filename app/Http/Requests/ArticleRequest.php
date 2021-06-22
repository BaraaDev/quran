<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'title'      => 'required|min:3|max:199|string',
            'content'    => 'required|min:3|string',
            'user'       => 'required',
            'image'      => 'required',
            'link'       => 'required|url',
            'level_id'   => 'required|exists:levels,id',
            'status'     => 'required|in:0,1|numeric',
        ];
    }
}
