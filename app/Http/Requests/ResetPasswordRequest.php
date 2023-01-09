<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest  extends FormRequest
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
            'new_password'=>'required|min:8',
            'old_password'=>'required|min:8'
        ];
    }

    public function messages()
    {
        return [
            'latitude_from.required' => trans('message.validateRequired'),
            'longitude_from.required' => trans('message.validateRequired'),
        ];
            }
}
