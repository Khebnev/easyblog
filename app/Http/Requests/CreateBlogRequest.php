<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBlogRequest extends FormRequest
{
 

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:5|max:15',
            'body' => 'required',
            'user_id' => 'required'
        ];
    }
}

class ShowBlogRequest extends FormRequest
{
    public function rules()
    {
        return [
            'title' => 'required|min:5|max:15',
            'body' => 'required',
            'user_id' => 'required'
        ];
    }
}