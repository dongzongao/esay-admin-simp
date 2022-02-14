<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdminRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required',
            'password' => [
                'required',
                'max:16',
                'min:6'
            ],
            'ip' => 'required'
        ];
    }


    public function messages(): array
    {
        return [
            'name.required' => '用户名称必须填写',
            'email.required' => '邮箱必须填写',
            'password.required' => '密码必须填写',
            'password.max' => '密码必须填写最大16个字符',
            'password.min' => '密码必须填写最小6个字符',
        ];
    }
}
