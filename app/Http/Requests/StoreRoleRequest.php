<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRoleRequest extends FormRequest
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
            'name' => 'required|min:4|max:50',
        ];
    }

    /**
     * [messages description]
     * @return [type] [description]
     */
    public function messages()
    {
        return [
            'name.required' => 'Vui lòng điền thông tin quyền',
            'name.min' => 'Vui lòng kiểm tra lại, tên không nhỏ hơn 4 kí tự',
            'name.max' => 'Độ dài tên không quá 50 kí tự',
        ];
    }
}
