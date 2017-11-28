@extends('layouts.master') @section('title') Cua hang sach hang dau @endsection() @section('header-v2') @include('particals.header-v2') @endsection() @section('nav-v2') @include('particals.nav-bar-v2') @endsection @section('content') @section('cart')
<nav class="woocommerce-breadcrumb"><a href="#">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>Cart
</nav>
<article class="page type-page status-publish hentry">
    <header class="entry-header">
        <h1 itemprop="name" class="entry-title">Giỏ hàng</h1></header>
    <!-- .entry-header -->
    <form>
        <table class="shop_table shop_table_responsive cart">
            <thead>
                <tr>
                    <th class="product-remove">&nbsp;</th>
                    <th class="product-thumbnail">&nbsp;</th>
                    <th class="product-name">Tên sách</th>
                    <th class="product-price">Đơn gía</th>
                    <th class="product-subtotal">Tổng</th>
                </tr>
            </thead>
            <tbody>
            	@foreach($content as $items)
            	{{-- {{ dd($items->options->image) }} --}}
                <tr class="cart_item">
                    <td class="product-remove">
                        <a class="remove" href="javascript:void(0)" data-id="{{ $items->rowId}}">×</a>
                    </td>
                    <td class="product-thumbnail">
                        <a href="#"><img width="180" height="180" src="{{ URL::to('assets/images/product/' . $items->options->image) }}" alt=""></a>
                    </td>
                    <td data-title="Product" class="product-name">
                        <a href="#">{{ $items->name }}</a>
                    </td>
                    <td data-title="Price" class="product-price">
                        <span class="amount">{{ number_format($items->price ,0, ",",".") }}</span>
                    </td>
                    <td data-title="Total" class="product-subtotal">
                        <span class="amount">$1,999.00</span>
                    </td>
                </tr>
                @endforeach
                <tr>
                    <td class="actions" colspan="6">
                        <div class="coupon">
                            <label for="coupon_code">Mã giảm gía:</label>
                            <input type="text" placeholder="Coupon code" value="" id="coupon_code" class="input-text" name="coupon_code">
                            <input type="submit" value="Apply Coupon" name="apply_coupon" class="button">
                        </div>
                        <div class="wc-proceed-to-checkout">
                            <a class="checkout-button button alt wc-forward" href="checkout.html">Đặt hàng</a>
                        </div>
                        <input type="hidden" value="1eafc42c5e" name="_wpnonce" id="_wpnonce">
                        <input type="hidden" value="/electro/cart/" name="_wp_http_referer">
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
    <div class="cart-collaterals">
        <div class="cart_totals ">
            <h2>Cart Totals</h2>
            <table class="shop_table shop_table_responsive">
                <tbody>
                    <tr class="cart-subtotal">
                        <th>Subtotal</th>
                        <td data-title="Subtotal"><span class="amount">{{ number_format($total,0,",",".") }}</span></td>
                    </tr>
                    <!-- <tr class="shipping">
                        <th>Shipping</th>
                        <td dât-title="Shipping">Flat Rate: <span class="amount">$300.00</span>
                            <input type="hidden" class="shipping_method" value="international_delivery" id="shipping_method_0" dât-index="0" name="shipping_method[0ư">
                            <form method="pót" action="http://transvelo.github.io/electro-html/cảt.html" class="woocmmerce-shipping-calculator">
                                <p><a dât-toggle="collapse" ẩi-controls="calculator" href="#calculator" ẩi-expanded="false" class="shipping-calculator-button">Calculate Shipping</a></p>
                            </form>
                        </td>
                    </tr> -->
                    <tr class="order-total">
                        <th>Total</th>
                        <td data-title="Total"><strong><span class="amount">{{ number_format($total,0,",",".") }}</span></strong> </td>
                    </tr>
                </tbody>
            </table>
            <div class="wc-proceed-to-checkout">
                <a class="checkout-button button alt wc-forward" href="checkout.html">Proceed to Checkout</a>
            </div>
        </div>
    </div>
</article>
@endsection @section('recently') @include('particals.recently') @endsection @include('particals.contents') @endsection @section('footer') @include('particals.footer') @endsection()
