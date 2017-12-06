<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserLoginRequest extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required|min:3',
        ];
    }

    public function messages()
    {
        return [

            'email.required' => 'Vui lòng nhập địa chỉ email',
            'email.email' => 'Bạn vừa nhập không phải email',
            'password.required' => 'Vui lòng nhập mật khẩu',
            'password.min' => 'Vui lòng kiểm tra lại mật khẩu',
            'failed' => 'Tài khoản không hợp lệ, vui lòng kiểm tra lại',
        ];
    }

}
