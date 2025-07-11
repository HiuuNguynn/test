<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'person_id' => 'required|exists:people,id_user',
            'title' => 'required|string|max:255|unique:posts,title',
            'content' => 'required|string',
        ];
    }
    public function messages()
    {
        return [
            'title.unique' => 'Title already exists',
            'title.required' => 'Please enter title.',
        ];
    }
}
