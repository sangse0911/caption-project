<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
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
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'address' => 'required|min:4',
            'account' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'phone.required' => 'Vui lòng nhập thông tin số điện thoại',
            'phone.numeric' => 'Số điện thoại phải là số',

            'email.required' => 'Vui lòng nhập địa chỉ email',
            'email.email' => 'Vui lòng kiểm tra lại, chưa đúng định dạng email',

            'address.required' => 'Vui lòng điền địa chỉ liên hệ',
            'address.min' => 'Vui lòng kiểm tra lại, địa chỉ không nhỏ hơn 4 kí tự',

            'account.required' => 'Vui lòng nhập thông tin tài khoản ngân hàng',
        ];
    }
}
