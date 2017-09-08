<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class UploadRequest extends FormRequest
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
            'file_ex' => 'required'
        ];

    }

    public function messages()
{
     return [
          'file_ex.required' => 'excel file is required',
          // 'file_ex.in' => 'invalid file excel please check extention name'
     ];
}

}
