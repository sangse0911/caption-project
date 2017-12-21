<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSaleRequest extends FormRequest
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
            'price' => 'required|numeric',
            'account' => 'required|min:6|max:255',
            'republish' => 'required|numeric',
            'quality' => 'required',
            'phone' => 'required|numeric',
            'address' => 'required|min:8|max:255',
            'images' => 'required',
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
            'name.max' => 'Tên sách không quá 255 kí tự',

            'introduce.required' => 'Vui lòng điền thông tin giới thiệu sách',
            'introduce.min' => 'Vui lòng kiểm tra lại thông tin, không ít hơn 6 kí tự',
            'introduce.max' => 'Giới thiệu sách không quá 255 kí tự',

            'account.required' => 'Vui lòng kiểm tra lại thông tin tài khoản',
            'account.min' => 'Tài khoản phải lớn hơn 6 kí tự',
            'account.max' => 'Tài khoản không lớn hơn 255 kí tự',

            'author.required' => 'Vui lòng điền thông tin tác gỉa',
            'author.min' => 'Vui lòng kiểm tra lại thông tin tác gỉa, không nhỏ hơn 6 kí tự',
            'author.max' => 'Tên tác gỉa không quá 255 kí tự',

            'company.required' => 'Vui lòng điền thông tin nhà xuất bản',
            'company.min' => 'Vui lòng kiểm tra lại thông tin của nhà xuất bản, không nhỏ hơn 6 kí tự',
            'company.max' => 'Tên nhà xuất bản không quá 255 kí tự',

            'year.required' => 'Vui lòng chọn năm xuất bản',

            'kind.required' => 'Vui lòng chọn loại sách',

            'method.required' => 'Vui lòng chọn phương thức thanh toán',

            'price.required' => 'Vui lòng nhập gía sách',
            'price.numeric' => 'Gía  phải là số',

            'account.required' => 'Vui lòng điền thông tin tài khoản',
            'account.mind' => 'Vui lòng kiểm tra lại thông tin, không nhỏ hơn 6 kí tự',
            'account.max' => 'Độ dài tài khoản không quá 255 kí tự',

            'price-rent.required' => 'Vui lòng nhập gía thuê',
            'price-rent.numeric' => 'Gía thuê phải là số',

            'republish.required' => 'Vui lòng điền thông tin tái bản',
            'republish.numeric' => 'Tái bản lân thứ phải là số',

            'quality.required' => 'Vui lòng chọn chất lưọng sách',

            'phone.required' => 'Vui lòng điền thông tin điện thoại',
            'phone.numeric' => 'Số điện thoại phải là số',

            'address.required' => 'Vui lòng điền thông tin địa chỉ của bạn',
            'address.min' => 'Địa chỉ không nhỏ hơn 8 kí tự',
            'address.max' => 'Địa chỉ không lớn hơn 255 kí tự',

            'images.required' => 'Vui lòng cung cấp ảnh của sách cho chúng tôi',
            'images.mimes' => 'Ảnh bạn cung cấp không chính xác, chỉ chấp nhận JPEG, JPG, PNG',
        ];
    }
}
