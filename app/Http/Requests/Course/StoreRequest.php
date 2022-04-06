<?php

namespace App\Http\Requests\Course;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => [
                'bail',
                'required',
                'string',
                'unique:App\Models\demo,name',
            ]
        ];
    }
    public function messages()
    {
        return [
            'name.string' => 'Phải là một chuỗi',
            'name.required' => 'không được để rỗng',
            'unique' => 'tên này đã được sử dụng'
        ];
    }
}
