@extends('layouts.master') @section('title') @endsection() @section('header-v2') @include('particals.header-v2') @endsection() @section('nav-v2') @include('particals.nav-bar-v2') @endsection @section('content') @section('customer')
<nav class="woocommerce-breadcrumb"><a href="/">Trang Chủ</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>Giỏ Hàng
</nav>
<article class="page type-page status-publish hentry">
    <header class="entry-header">
        <img style="margin: auto;" src="{{ URL::to('img/HR.png') }}">
        <span style="left: 50%; color: #a3d133; font-weight: bold;font-size: 35px; font-family: cursive;" >Giỏ hàng</span>
        <div class="hr"><hr /></div>
        <br>
        <form>
            <table class="shop_table shop_table_responsive cart" style="border-style: dashed;border-color: #a3d133;">
                <thead>
                    <tr >
                        <th class="product-remove">&nbsp;</th>
                        <th class="product-thumbnail">&nbsp;</th>
                        <th class="product-name" style="font-weight: bold; color: red;">Tên sách</th>
                        <th class="product-price" style="font-weight: bold; color: red;">Đơn giá</th>
                        <th class="product-subtotal" style="font-weight: bold; color: red;">Tổng</th>
                    </tr>
                </thead>
                <tbody >
                    @foreach($content as $item)
                    <tr class="cart_item" >
                        <td class="product-remove">
                            <a class="remove" href="javascript:void(0)" data-id="{{ $item->rowId}}">×</a>
                        </td>
                        <td class="product-thumbnail">
                            <a href="#"><img width="180" height="180" src="{{ URL::to('assets/images/product/' . $item->options->image) }}" alt=""></a>
                        </td>
                        <td data-title="Product" class="product-name">
                            <a href="#">{{ $item->name }}</a>
                        </td>
                        <td data-title="Price" class="product-price">
                            <span class="amount" style="color: red;">{{ ($item->price) }}</span>
                        </td>
                        <td data-title="Total" class="product-subtotal">
                            <span class="amount">{{ $item->price }}</span>
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                        <td class="actions" colspan="5" >

                        </td>
                    </tr>
                    <tr >
                        <td class="actions" colspan="5" >
                            <div style="float: left;">
                            <div class="row" style="text-align: left;margin: 4px;">
                                <span style="color: #2660C1;font-size: 15px;font-weight: bold;">Tên: </span>
                                <input  type="text" name="name" id="address" value="" placeholder="Nhập tên" style="width: 100%; ">
                            </div>
                            <div class="row" style="text-align: left;margin: 4px;">
                                <span style="color: #2660C1;font-size: 15px;font-weight: bold;">Email: </span>
                                <input type="text" name="email" id="address" value="" placeholder="Nhập email" style="width: 100%;">
                            </div>
                            <div class="row" style="text-align: left;margin: 4px;">
                                <span style="color: #2660C1;font-size: 15px;font-weight: bold;">Địa Chỉ: </span>
                                <input type="text" name="address" id="address" value="" placeholder="Nhập địa chỉ" style="width: 100%;">
                            </div>
                            </div>
                            <div style="margin-bottom: 50px;float: right;" class="col-md-6">
                                <label style="color: #2660C1;font-size: 15px;float: left">Hình thức Thanh toán</label><br>
                                <div style="clear: both;"></div>
                                <label class="radio-inline"><input type="radio" name="method" value="1">Thanh toán khi nhận sách</label>
                                <label class="radio-inline"><input type="radio" name="method" value="2">Chuyển khoản trước</label>
                                <br>
                                <label style="float: left;color: #2660C1;font-size: 15px;">Mã giảm giá:</label>
                                    <input type="text" placeholder="Coupon code"  value="" id="coupon_code" class="input-text" name="coupon_code" style=" width: 200px;float: left;">
                                    <input type="submit" value="Áp dụng" name="apply_coupon" class="button" style="margin-top: 19px;width: 150px;left: 100%;">
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
        <table class="shop_table shop_table_responsive col-md-6" style="float: right;">
            <tbody>
                <tr ><td style="border-top-color: white;"></td><td style="border-top-color: white;"><span style="color: red;  font-weight: bold;font-size: 25px;">Tổng giá giỏ hàng</span></td></tr>
                <tr class="cart-subtotal">
                    <th>Tạm tính: </th>
                    <td data-title="Subtotal"><span class="amount">{{ ($total) }} VNĐ</span></td>
                </tr>
                <tr class="order-total">
                    <th>Thành Tiền: </th>
                    <td data-title="Total"><strong><span class="amount">{{ ($total) }} VNĐ</span></strong> <br><br><br>
                    <button class="btn-danger" style="width: 200px;" href="javascript:void(0)" id="checkout">Đặt hàng</button></td>
                </tr>
            </tbody>
        </table>
    </header>
</article>
@endsection @section('sidebar')
<div id="sidebar" class="sidebar" role="complementary">
    <div style="clear: both; margin-top: 50px;"></div>
    <aside class="widget widget_text">
        <div class="textwidget">
            <a href="javascript:void(0)">
                <img src="{{ URL::to('assets/images/banner/banner1.jpg') }}" id="borderimg2" alt="Banner">
            </a>
        </div>
    </aside>
    <aside class="widget widget_text">
        <div class="textwidget">
            <a href="javascript:void(0)">
                <img src="{{ URL::to('assets/images/banner/banner2.jpg') }}" id="borderimg2" alt="Banner">
            </a>
        </div>
    </aside>
    @yield('recently')
    <aside id="electro_features_block_widget-2" class="widget widget_electro_features_block_widget">
        <div class="features-list columns-1">
            <div class="feature">
                <div class="media">
                    <div class="media-left media-middle feature-icon">
                        <i class="ec ec-transport"></i>
                    </div>
                    <div class="media-body media-middle feature-text">
                        <strong>Miễn phí vận chuyển</strong> từ $50
                    </div>
                </div>
            </div>
            <div class="feature">
                <div class="media">
                    <div class="media-left media-middle feature-icon">
                        <i class="ec ec-returning"></i>
                    </div>
                    <div class="media-body media-middle feature-text">
                        <strong>14 ngày</strong> đổi trả
                    </div>
                </div>
            </div>
            <div class="feature">
                <div class="media">
                    <div class="media-left media-middle feature-icon">
                        <i class="ec ec-payment"></i>
                    </div>
                    <div class="media-body media-middle feature-text">
                        <strong>Thanh toán</strong> qua ngân hàng
                    </div>
                </div>
            </div>
            <div class="feature">
                <div class="media">
                    <div class="media-left media-middle feature-icon">
                        <i class="ec ec-tag"></i>
                    </div>
                    <div class="media-body media-middle feature-text">
                        <strong>Sách đã bán</strong> đều đảm bảo
                    </div>
                </div>
            </div>
        </div>
    </aside>
</div>
@endsection @include('particals.contents') @endsection @section('footer') @include('particals.footer') @endsection
