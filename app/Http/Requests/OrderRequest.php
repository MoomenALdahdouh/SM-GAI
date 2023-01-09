<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'latitude_from' => 'required|numeric|between:0,99.99',
            'longitude_from' => 'required|numeric|between:0,99.99',
            'region_from' => 'required',
            'city_id_from' => 'required',
            'latitude_to' => 'required|numeric|between:0,99.99',
            'longitude_to' => 'required|numeric|between:0,99.99',
            'region_to' => 'required',
            'city_id_to' => 'required',
            'date' => 'required|date_format:d/m/Y',
            'time' => 'required|date_format:H:i',
            'estimated_price' => 'required|numeric',
            'details' => 'required',
            'type_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'latitude_from.required' => trans('message.validateRequired'),
            'longitude_from.required' => trans('message.validateRequired'),
            'region_from.required' => trans('message.validateRequired'),
            'latitude_to.required' => trans('message.validateRequired'),
            'longitude_to.required' => trans('message.validateRequired'),
            'region_to.required' => trans('message.validateRequired'),
            'date.required' => trans('message.validateRequired'),
            'time.required' => trans('message.validateRequired'),
            'estimated_price.required' => trans('message.validateRequired'),
            'details.required' => trans('message.validateRequired'),
            'type_id.required' => trans('message.validateRequired'),
        ];
    }
}
