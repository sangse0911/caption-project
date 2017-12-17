<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateBookAdminRequest extends FormRequest
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
            'name' => 'required|min:3',
            'introduce' => 'required|min:6',
            'author' => 'required|min:6',
            'company' => 'required|min:6',
            'year' => 'required',
            'price' => 'required:numeric',
            'rent' => 'required|numeric',
            'categories' => 'required',
            'isbn' => 'required',
            'republish' => 'required|numeric',
            'location' => 'required',
            'quality' => 'required',
        ];
    }

    /**
     * [messages description]
     * @return [type] [description]
     */
    public function messages()
    {

        return [

            'name.required' => 'Vui lòng điền tên của sách',
            'name.min' => 'Vui lòng kiểm tra lại thông tin, không ít hơn 3 kí tự',

            'introduce.required' => 'Vui lòng điền thông tin giới thiệu sách',
            'introduce.min' => 'Vui lòng kiểm tra lại thông tin, không ít hơn 6 kí tự',

            'author.required' => 'Vui lòng điền thông tin tác gỉa',
            'author.min' => 'Vui lòng kiểm tra lại thông tin tác gỉa, không nhỏ hơn 6 kí tự',

            'company.required' => 'Vui lòng điền thông tin nhà xuất bản',
            'company.min' => 'Vui lòng kiểm tra lại thông tin của nhà xuất bản, không nhỏ hơn 6 kí tự',

            'year.required' => 'Vui lòng chọn năm xuất bản',

            'price.required' => 'Vui lòng nhập gía sách',
            'price.numeric' => 'Gía  phải là sô',

            'categories.required' => 'Vui lòng chọn thể loại sách',

            'rent.required' => 'Vui lòng nhập gía thuê',
            'rent.numeric' => 'Gía thuê phải là số',

            'republish.required' => 'Vui lòng điền thông tin tái bản',
            'republish.numeric' => 'Tái bản lân thứ phải là số',

            'location.required' => 'Vui lòng chọn vị trí gía sách',

            'quality.required' => 'Vui lòng chọn chất lượng sách',

            'isbn.required' => 'Vui lòng điền isbn của sách',

            // 'image.required' => 'Vui lòng cung cấp ảnh của sách cho chúng tôi',
            // 'image.image' => 'Xin lỗi, ảnh bạn cung cấp không chính xác, vui lòng kiểm tra lại',
        ];
    }
}
