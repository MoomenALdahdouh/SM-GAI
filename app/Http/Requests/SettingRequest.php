<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
            'details_ar' => 'required',
            'details_en' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'details_ar.required' => trans('message.validateRequired'),
            'details_en.required' => trans('message.validateRequired'),
        ];
    }
}
