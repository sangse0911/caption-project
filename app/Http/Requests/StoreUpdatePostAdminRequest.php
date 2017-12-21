<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdatePostAdminRequest extends FormRequest
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
            'name' => 'required|min:3|max:255',
            'introduce' => 'required|min:6|max:255',
            'author' => 'required|min:6|max:255',
            'company' => 'required|min:6|max:255',
            'year' => 'required',
            'kind' => 'required',
            'method' => 'required',
            'price' => 'required:numeric',
            'price-rent' => 'required|numeric',
            'account' => 'required|min:6|max:255',
            'republish' => 'required|numeric',
            'quality' => 'required',
            'images' => 'required',
        ];
    }

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

            'kind.required' => 'Vui lòng chọn loại sách',

            'method.required' => 'Vui lòng chọn phương thức thanh toán',

            'price.required' => 'Vui lòng nhập gía sách',
            'price.numeric' => 'Gía  phải là sô',

            'account.required' => 'Vui lòng điền thông tin tài khoản',
            'account.mind' => 'Vui lòng kiểm tra lại thông tin, không nhỏ hơn 6 kí tự',

            'categories.required' => 'Vui lòng chọn thể loại sách',

            'price-rent.required' => 'Vui lòng nhập gía thuê',
            'price-rent.numeric' => 'Gía thuê phải là số',

            'republish.required' => 'Vui lòng điền thông tin tái bản',
            'republish.numeric' => 'Tái bản lân thứ phải là số',

            'location.required' => 'Vui lòng chọn vị trí gía sách',

            'quality.required' => 'Vui lòng chọn chất lưọng sách',

            'isbn.required' => 'Vui lòng điền isbn của sách',

            'images.required' => 'Vui lòng cung cấp ảnh của cuốn sách',
            'images.mimes' => 'Ảnh bạn chọn phải đúng định dạng JPEG, JPG, PNG',
        ];
    }
}
