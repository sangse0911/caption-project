<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
            'name' => 'required|min:6',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng điền thông tin thể loại sách',
            'name.min' => 'Vui lòng kiểm tra lại, tên không nhỏ hơn 6 kí tự',
        ];
    }
}
