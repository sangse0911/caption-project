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
            'email' => 'required|email|max:255',
            'password' => 'required|min:6',
        ];
    }

    public function messages()
    {
        return [

            'email.required' => 'Vui lòng nhập địa chỉ email',
            'email.email' => 'Bạn vừa nhập không phải email',
            'email.max' => 'Độ dài địa chỉ email không quá 255 kí tự',

            'password.required' => 'Vui lòng nhập mật khẩu',
            'password.min' => 'Vui lòng kiểm tra lại mật khẩu, không nhỏ hơn 6 kí tự',

            'failed' => 'Tài khoản không hợp lệ, vui lòng kiểm tra lại',
        ];
    }

}
