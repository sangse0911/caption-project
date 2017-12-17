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
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric|min:9',
        ];
    }

    public function messages()
    {
        return [

            'name.required' => 'Vui lòng nhập tên nhân viên',

            'email.required' => 'Vui lòng nhập địa chỉ email',
            'email.email' => 'Vui lòng kiểm tra lại, email chưa đúng định dạng',

            'phone.required' => 'Vui lòng nhập số điện thoại',
            'phone.min' => 'Vui lòng kiểm tra lại, số điện thoại không nhỏ hơn 9 kí tự',
            'phone.numeric' => 'Vui lòng kiểm tra lại, số điện thoại chưa chính xác',
        ];
    }
}
