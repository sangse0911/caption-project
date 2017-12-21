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
            'email' => 'required|email|max:255',
            'address' => 'required|min:6|max:255',
            'account' => 'required|max:255',
        ];
    }

    public function messages()
    {
        return [
            'phone.required' => 'Vui lòng điền thông tin số điện thoại',
            'phone.numeric' => 'Vui lòng kiểm tra lại, số điện thoại chưa chính xác',

            'email.required' => 'Vui lòng nhập địa chỉ email',
            'email.email' => 'Vui lòng kiểm tra lại, chưa đúng định dạng email',

            'address.required' => 'Vui lòng điền thông tin địa chỉ của bạn',
            'address.min' => 'Vui lòng kiểm tra lại địa chỉ, không nhỏ hơn 6 kí tự',
            'address.max' => 'Địa chỉ không quá 255 kí tự',

            'account.required' => 'Vui lòng nhập thông tin tài khoản ngân hàng',
            'account.max' => 'Độ dài tài khoản không vượt quá 255 kí tự',
        ];
    }
}
