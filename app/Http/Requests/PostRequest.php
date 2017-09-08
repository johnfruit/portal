<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;



class PostRequest extends FormRequest
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
            'BU' => 'required',
            'type_of_serv' => 'required',
            'details' => 'required',
            'exp_date' => 'required',
            'provider' => 'required',
            'price' => 'required',

        ];
    }
    public function messages()
    {
         return [
              'BU.required' => 'Bussiness unit is required',
              'type_of_serv.required' => 'Type of service is required',
              'details.required' => 'Details is required',
              'exp_date.required' => 'Expiration date is required',
              'provider.required' => 'Provider is required',
              'price.required' => 'Price is required'
         ];
    }



}
