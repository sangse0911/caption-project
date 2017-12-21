<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookShelfRequest extends FormRequest
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
            'location' => 'required|min:6|max:255',
        ];
    }

    public function messages()
    {
        return [

            'location.required' => 'Vui lòng điền địa điểm gía sách',
            'location.min' => 'Thông tin không đủ 6 kí tự',
            'location.max' => 'Độ dài không quá 255 kí tự',
        ];
    }
}
