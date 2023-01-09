<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaxRequest extends FormRequest
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
            'title_ar' => 'required',
            'title_en' => 'required',
            'details_ar' => 'required',
            'details_en' => 'required',
            'type' => 'required',
            'value' => 'required|max:4'
        ];
    }

    public function messages()
    {
        return [
            'title_ar.required' => trans('message.validateRequired'),
            'title_en.required' => trans('message.validateRequired'),
            'details_ar.required' => trans('message.validateRequired'),
            'details_en.required' => trans('message.validateRequired'),
            'type.required' => trans('message.validateRequired'),
            'value.required' => trans('message.validateRequired'),
        ];
    }
}
