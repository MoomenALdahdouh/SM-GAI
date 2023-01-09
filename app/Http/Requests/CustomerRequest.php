<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

    class CustomerRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email|unique:customers,email',
            'phone_number' => 'required|min:11|numeric|unique:customers,phone_number',
            'password' => 'required|min:8',
            'city_id' => '',
            'fcm' => '',
            'image' => '',
        ];
    }

        public function messages()
        {
            return [
                'name.required' => trans('message.validateRequired'),
                'email.required' => trans('message.validateRequired'),
                'phone_number.required' => trans('message.validateRequired'),
                'password.required' => trans('message.validateRequired'),
            ];
        }
}
