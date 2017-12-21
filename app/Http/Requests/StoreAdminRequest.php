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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [

            'name.required' => 'Vui lòng nhập tên nhân viên',
            'name.max' => 'Độ dài của tên không quá 255 kí tự',

            'email.required' => 'Vui lòng nhập địa chỉ email',
            'email.email' => 'Vui lòng kiểm tra lại, email chưa đúng định dạng',
            'email.max' => 'Độ dài email không quá 255 kí tự',

            'phone.required' => 'Vui lòng nhập số điện thoại',
            'phone.numeric' => 'Vui lòng kiểm tra lại, số điện thoại chưa chính xác',
        ];
    }
}
