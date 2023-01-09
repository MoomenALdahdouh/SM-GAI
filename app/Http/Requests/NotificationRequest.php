<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NotificationRequest extends FormRequest
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
            'title' => 'required',
            'details' => 'required',
            'users' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => trans('message.validateRequired'),
            'details.required' => trans('message.validateRequired'),
            'users.required' => trans('message.validateRequired'),
        ];
    }
}
