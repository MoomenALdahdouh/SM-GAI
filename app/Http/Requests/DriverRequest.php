<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

    class DriverRequest extends FormRequest
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
            'phone_number' => 'required|min:11|numeric|unique:customers,phone_number',
            'email' => 'required|email|unique:customers,email',
            'password' => 'required|min:8',
            'card_number' => 'required',
            'license_type' => 'required',
            'license_number' => 'required',
            'image' => 'required',
            'certificate_precedents_Image' => 'required',
            'driving_license_image' => 'required',
            'vehicles_driving_license_image' => 'required',
            'commissioner_image' => '',
            'insurance_image' => 'required',
            'technical_inspection_image' => 'required',
            'card_employment_image' => 'required',
            'city_id' => 'required',
            'fcm' => '',
        ];
    }

        public function messages()
        {
            return [
                'name.required' => trans('message.validateRequired'),
                'email.required' => trans('message.validateRequired'),
                'phone_number.required' => trans('message.validateRequired'),
                'password.required' => trans('message.validateRequired'),
                'card_number.required' => trans('message.validateRequired'),
                'image.required' => trans('message.validateRequired'),
                'city_id.required' => trans('message.validateRequired'),
                'technical_inspection_image.required' => trans('message.validateRequired'),
                'vehicles_driving_license_image.required' => trans('message.validateRequired'),
                'certificate_precedents_Image.required' => trans('message.validateRequired'),
                'license_type.required' => trans('message.validateRequired'),
                'license_number.required' => trans('message.validateRequired'),
                'driving_license_image.required' => trans('message.validateRequired'),
                'insurance_image.required' => trans('message.validateRequired'),
                'card_employment_image.required' => trans('message.validateRequired'),
            ];
        }
}
