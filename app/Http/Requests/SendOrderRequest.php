<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendOrderRequest extends FormRequest
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
            'order_id' => 'required|numeric',
            'price' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'order_id.required' => trans('message.validateRequired'),
            'price.required' => trans('message.validateRequired'),
        ];
    }
}
