<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCartRequest extends FormRequest
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
            'address' => 'required|min:6|max:255',
            'phone' => 'required|numeric',
            'method' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'address.required' => 'Vui lòng điền thông tin địa chỉ của bạn',
            'address.min' => 'Vui lòng kiểm tra lại địa chỉ, không nhỏ hơn 6 kí tự',
            'address.max' => 'Địa chỉ không quá 255 kí tự',

            'phone.required' => 'Vui lòng điền thông tin số điện thoại',
            'phone.numeric' => 'Vui lòng kiểm tra lại, số điện thoại chưa chính xác',

            'method.required' => 'Vui lòng chọn phương thức thanh toán',
        ];
    }
}
