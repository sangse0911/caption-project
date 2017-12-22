@extends('layouts.master') @section('title') @endsection() @section('header-v2') @include('particals.header-v2') @endsection() @section('nav-v2') @include('particals.nav-bar-v2') @endsection @section('content') @section('search') @include('particals.search') @endsection @section('customer')
<nav class="woocommerce-breadcrumb"><a href="/">Trang Chủ</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>Giỏ Hàng
</nav>
<article class="page type-page status-publish hentry">
    <header class="entry-header">
        <img style="margin: auto;" src="{{ URL::to('img/HR.png') }}">
        <span style="left: 50%; color: #a3d133; font-weight: bold;font-size: 35px; font-family: cursive;">Giỏ hàng</span>
        <div class="hr">
            <hr />
        </div>
        <br>
        <table class="shop_table shop_table_responsive cart" style="border-style: dashed;border-color: #a3d133;">
            <thead>
                <tr>
                    <th class="product-remove">&nbsp;</th>
                    <th class="product-thumbnail">&nbsp;</th>
                    <th class="product-name" style="font-weight: bold; color: red;">Tên sách</th>
                    <th class="product-price" style="font-weight: bold; color: red;">Đơn giá</th>
                    <th class="product-subtotal" style="font-weight: bold; color: red;">Tổng</th>
                </tr>
            </thead>
            <tbody>
                @foreach($content as $item)
                <tr class="cart_item">
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
                        <span class="amount" style="color: red;">{{ ($item->price) }} VNĐ</span>
                    </td>
                    <td data-title="Total" class="product-subtotal">
                        <span class="amount" style="color: red;">{{ $item->price }} VNĐ</span>
                    </td>
                </tr>
                @endforeach
                <tr>
                    <td class="actions" colspan="5">
                    </td>
                </tr>
                <tr>
                    <td class="actions" colspan="5">
                        <div style="float: left;">
                            <div class="row" style="text-align: left;margin: 4px;">
                                <span style="color: #2660C1;font-size: 15px;font-weight: bold;">Địa Chỉ: </span>
                                <input type="text" name="address" id="address" placeholder="Nhập địa chỉ" style="width: 100%;">
                                <span class="help-block">
                                    <strong id="error-address"></strong>
                                </span>
                            </div>
                            <br/>
                            <div class="row" style="text-align: left;margin: 4px;">
                                <span style="color: #2660C1;font-size: 15px;font-weight: bold;">Số điện thoại</span>
                                <input type="text" name="phone" id="phone" placeholder="Nhập số điện thoại" style="width: 100%;">
                                <span class="help-block">
                                    <strong id="error-phone"></strong>
                                </span>
                            </div>
                        </div>
                        <div style="margin-bottom: 50px;float: right;" class="col-md-6">
                            <label style="color: #2660C1;font-size: 15px;float: left">Hình thức Thanh toán</label>
                            <br>
                            <div style="clear: both;"></div>
                            <label class="radio-inline">
                                <input type="radio" name="method" value="1">Thanh toán khi nhận sách</label>
                            <label class="radio-inline">
                                <input type="radio" name="method" value="2">Chuyển khoản trước</label>

                        </div>
                        <div style="clear: both;">

                        </div>
                        <a data-toggle="modal" href="#myModal" style="color: red;">Quy định của website khi thuê(mượn, mua) sách</a>
                        <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog modal-lg" style="max-width: 1100px;">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Chỉnh sửa sách</h4>
                                    </div>
                                    <input type="hidden" name="" id="id">
                                    <div class="modal-body">
                                        <div id="content-page" class="span12 content group">
                                            <div id="post-9122" class="group post-9122 page type-page status-publish hentry instock">
                                                <h3><span style="color: #dc8323;">1. Thuê Thời Hạn Dưới 1 Năm.</span></h3>
                                                <p>Bạn có thói quen đọc thật chậm rãi, thưởng thức từng câu chữ qua mỗi trang sách. Mỗi quyển sách đối với bạn là một trải nghiệm sâu sắc, vì thế bạn <span style="color: #dc8323;">cần rất nhiều thời gian</span> để đọc một quyển sách. Hoặc chỉ đơn giản là bạn <span style="color: #dc8323;">không có nhiều thời gian</span> và chỉ có thể đọc được <span style="color: #dc8323;">mỗi ngày một ít</span>, vậy thì đây là hình thức thuê rất phù hợp với bạn. Với hình thức thuê này, bạn có thể giữ sách trong vòng 1 năm mà không cần suy nghĩ gì cả.</p>
                                                <table class="price" border="1" cellspacing="0" cellpadding="0" align="center">
                                                    <tbody style="text-align: center;">
                                                        <tr>
                                                            <th width="50%">GIÁ BÌA (KHÔNG CÓ GIẢM GIÁ)</th>
                                                            <th width="50%">Giá Thuê</th>
                                                        </tr>
                                                        <tr>
                                                            <td>50.000 &#8211; 70.000</td>
                                                            <td>20.000 đ</td>
                                                        </tr>
                                                        <tr>
                                                            <td>70.000 &#8211; 90.000</td>
                                                            <td>30.000 đ</td>
                                                        </tr>
                                                        <tr>
                                                            <td>90.000 &#8211; 110.000</td>
                                                            <td>40.000 đ</td>
                                                        </tr>
                                                        <tr>
                                                            <td>110.000 &#8211; 130.000</td>
                                                            <td>50.000 đ</td>
                                                        </tr>
                                                        <tr>
                                                            <td>130.000 &#8211; 150.000</td>
                                                            <td>60.000 đ</td>
                                                        </tr>
                                                        <tr>
                                                            <td>150.000 &#8211; 300.000</td>
                                                            <td>70.000 đ</td>
                                                        </tr>
                                                        <tr>
                                                            <td>300.000 đ &#8211; 500.000 đ</td>
                                                            <td>120.000 đ</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p><span style="text-decoration: underline; color: #dc8323;">Lưu ý:</span></p>
                                                <ul>
                                                    <li>Đối với sách có giá bìa dưới 50.000 đ quý khách vui lòng chọn 2 quyển cho 1 lần thuê.</li>
                                                    <li>Qúy khách có thể đọc đến bao lâu cũng được (miễn là không quá 1 năm kể từ ngày giao sách)</li>
                                                    <li>Nếu quá thời gian thuê 1 năm mà quý khách chưa trả lại sách thì chúng tôi sẽ mặc định đã mua hẳn cuốn sách đó và sẽ tự động trừ vào số tiền mà khách đặt cọc.</li>
                                                </ul>
                                                <h3><span style="color: #dc8323;">2. Thuê Trong 2 Tuần.</span></h3>
                                                <p>Nhằm giúp bạn đọc tiết kiệm thêm chi phí, <span style="color: red;font-weight: bold;">BookServiceOnline </span> quyết định áp dụng hình thức thuê dành cho khách hàng đăng ký trả sách sớm trong vòng 2 tuần. Với hình thức thuê này quý khách có thể <span style="color: #228b22;">tiết kiệm được CỰC NHIỀU</span> tiền thuê cho <span style="color: #228b22;">mỗi quyển sách </span>so với hình thức Thuê Dưới 1 Năm.</p>
                                                <table class="price" border="1" cellspacing="0" cellpadding="0" align="center">
                                                    <tbody style="text-align: center;">
                                                        <tr>
                                                            <th width="50%">GIÁ BÌA (KHÔNG CÓ GIẢM GIÁ)</th>
                                                            <th width="100%">Giá Thuê</th>
                                                        </tr>
                                                        <tr>
                                                            <td>50.000 đ &#8211; 70.000 đ</td>
                                                            <td>10.000 đ/ 2 tuần</td>
                                                        </tr>
                                                        <tr>
                                                            <td>70.000 đ &#8211; 90.000 đ</td>
                                                            <td>15.000 đ/ 2 tuần</td>
                                                        </tr>
                                                        <tr>
                                                            <td>90.000 đ &#8211; 110.000 đ</td>
                                                            <td>20.000 đ/ 2 tuần</td>
                                                        </tr>
                                                        <tr>
                                                            <td>110.000 đ &#8211; 130.000 đ</td>
                                                            <td>25.000 đ/ 2 tuần</td>
                                                        </tr>
                                                        <tr>
                                                            <td>130.000 đ &#8211; 150.000 đ</td>
                                                            <td>30.000 đ/ 2 tuần</td>
                                                        </tr>
                                                        <tr>
                                                            <td>150.000 đ &#8211; 300.000 đ</td>
                                                            <td>35.000 đ/ 2 tuần</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p><span style="text-decoration: underline; color: #dc8323;">Lưu ý:</span></p>
                                                <ul>
                                                    <li>Đối với sách có giá bìa dưới 50.000 đ quý khách vui lòng chọn 2 quyển cho 1 lần thuê.</li>
                                                    <li>Thời gian giữ sách bắt đầu được tính kể từ khi giao sách. Nếu quá thời gian thuê sách (2 tuần) thì chúng tôi sẽ thu thêm là 5.000 đ/ 1 tuần tiền phí quá hạn và sẽ được trừ vào tiền cọc khi quý khách trả sách.</li>
                                                    <li>Nếu tổng giá trên mức 300.000 đ thì chúng tôi sẽ áp dụng chính sách giá theo mục #4 Thuê Theo Bộ Sách bên dưới đây.</li>
                                                </ul>
                                                <h3><span style="color: #dc8323;">3. Thuê Trong 1 Tháng.</span></h3>
                                                <p>Nhằm giúp bạn đọc tiết kiệm thêm chi phí và thêm thời gian đọc, <span style="color: red;font-weight: bold;">BookServiceOnline </span> quyết định áp dụng hình thức thuê dành cho khách hàng đăng ký trả sách trong vòng 1 tháng. Với hình thức thuê này quý khách có thể <span style="color: #228b22;">tiết kiệm thêm 3.000 đ</span> tiền thuê cho <span style="color: #228b22;">mỗi quyển sách</span> so với hình thức <span style="color: #228b22;">Thuê Dưới 1 Năm</span>.</p>
                                                <table class="price" border="1" cellspacing="0" cellpadding="0" align="center">
                                                    <tbody style="text-align: center;">
                                                        <tr>
                                                            <th width="50%">GIÁ BÌA (KHÔNG CÓ GIẢM GIÁ)</th>
                                                            <th width="50%">Giá Thuê</th>
                                                        </tr>
                                                        <tr>
                                                            <td>50.000 đ &#8211; 70.000 đ</td>
                                                            <td>12.000 đ/ 1 tháng</td>
                                                        </tr>
                                                        <tr>
                                                            <td>70.000 đ &#8211; 90.000 đ</td>
                                                            <td>17.000 đ/ 1 tháng</td>
                                                        </tr>
                                                        <tr>
                                                            <td>90.000 đ &#8211; 110.000 đ</td>
                                                            <td>22.000 đ/ 1 tháng</td>
                                                        </tr>
                                                        <tr>
                                                            <td>110.000 đ &#8211; 130.000 đ</td>
                                                            <td>27.000 đ/ 1 tháng</td>
                                                        </tr>
                                                        <tr>
                                                            <td>130.000 đ &#8211; 150.000 đ</td>
                                                            <td>32.000 đ/ 1 tháng</td>
                                                        </tr>
                                                        <tr>
                                                            <td>150.000 đ &#8211; 300.000 đ</td>
                                                            <td>37.000 đ/ 1 tháng</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p><span style="text-decoration: underline; color: #dc8323;">Lưu ý:</span></p>
                                                <ul>
                                                    <li>Đối với sách có giá bìa dưới 50.000 đ quý khách vui lòng chọn 2 quyển cho 1 lần thuê.</li>
                                                    <li>Nếu tổng giá trên mức 300.000 đ thì chúng tôi sẽ áp dụng chính sách giá theo mục #4 Thuê Theo Bộ Sách bên dưới đây.</li>
                                                    <li>Thời gian giữ sách bắt đầu được tính kể từ khi giao sách. Nếu quá thời gian thuê sách (1 tháng) thì chúng tôi sẽ thu thêm là <span style="color: #228b22;">5.000 đ/ 1 tuần</span> tiền phí quá hạn và sẽ được trừ vào tiền cọc khi quý khách trả sách.</li>
                                                </ul>
                                                <h3><span style="color: #dc8323;">4. Thuê Theo Bộ Sách.</span></h3>
                                                <p>Bạn có sở thích đọc các bộ truyện tranh, các bộ tiểu thuyết dài tập, các bộ sách hay…nhưng lại không có thời gian cũng như chi phí để thuê từng cuốn. <span style="color: red;font-weight: bold;">BookServiceOnline </span> quyết định áp dụng cho thuê sách theo các bộ sách nằm ở BSO.</p>
                                                <p>Với hình thức này, khách hàng sẽ tiết kiệm được rất nhiều chi phí so với hình thức thuê theo giá bìa của từng cuốn</p>
                                                <table class="price" border="1" cellspacing="0" cellpadding="0" align="center">
                                                    <tbody style="text-align: center;">
                                                        <tr>
                                                            <th width="50%">Giá Bìa (không có giảm giá)</th>
                                                            <th width="50%">Giá Thuê</th>
                                                        </tr>
                                                        <tr>
                                                            <td>150.000 đ &#8211; 300.000 đ</td>
                                                            <td>30.000 đ/ 1 tháng</td>
                                                        </tr>
                                                        <tr>
                                                            <td>300.000 đ &#8211; 500.000 đ</td>
                                                            <td>45.000 đ/ 1 tháng</td>
                                                        </tr>
                                                        <tr>
                                                            <td>500.000 đ &#8211; 800.000 đ</td>
                                                            <td>70.000 đ/ 1 tháng</td>
                                                        </tr>
                                                        <tr>
                                                            <td>800.000 đ &#8211; 1.000.000 đ</td>
                                                            <td>80.000 đ/ 1 tháng</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p><span style="text-decoration: underline;"><span style="color: #dc8323; text-decoration: underline;">Lưu ý:</span></span>
                                                </p>
                                                <ul>
                                                    <li>Thời gian giữ sách bắt đầu được tính kể từ khi giao sách. Nếu quá thời gian thuê sách (1 tháng) thì chúng tôi sẽ thu thêm là <span style="color: #228b22;">10.000 đ/ 1 tuần / 1 bộ</span> tiền phí quá hạn và sẽ được trừ vào tiền cọc khi quý khách trả sách.</li>
                                                </ul>
                                                <h3><span style="color: #dc8323;">5 Phí Vận Chuyển.</span></h3>
                                                <p>Để thuận tiện cho việc vận chuyển sách đến khách hàng, <span style="color: #228b22;">BSO</span> đưa ra bảng giá phí vận chuyển khi khách hàng áp dụng chương trình “<span style="color: #228b22;">Thuê Sách</span>” tại <span style="color: #228b22;">BSO</span>.</p>
                                                <table class="price" border="1" cellspacing="0" cellpadding="0" align="center">
                                                    <tbody style="text-align: center;">
                                                        <tr>
                                                            <th width="50%">Phạm Vi Bán Kính (Tính từ cửa hàng theo Google map)</th>
                                                            <th width="50%">Phí Vận Chuyển ( 2 chiều giao &amp; nhận lại sách)</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Từ 5 Km &#8211; 7 Km</td>
                                                            <td>20.000 đ</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Từ 7 Km &#8211; 10 Km</td>
                                                            <td>30.000 đ</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Từ 10 Km &#8211; 15 Km</td>
                                                            <td>40.000 đ</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Từ 15 Km &#8211; 20 Km</td>
                                                            <td>50.000 đ</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p><span style="text-decoration: underline; color: #dc8323;">Lưu ý:</span></p>
                                                <ul>
                                                    <li>Khung chi phí trên chỉ áp dụng cho khách hàng trong khu vực nội thành Hà Nội.</li>
                                                    <li>Các khu vực ngoại thành, khách hàng chịu chi phí vận chuyển.</li>
                                                </ul>
                                                <p>&nbsp;</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="shop_table shop_table_responsive col-md-6" style="float: right;">
            <tbody>
                <tr>
                    <td style="border-top-color: white;"></td>
                    <td style="border-top-color: white;"><span style="color: red;  font-weight: bold;font-size: 25px;">Tổng giá giỏ hàng</span></td>
                </tr>
                <tr class="cart-subtotal">
                    <th>Tạm tính: </th>
                    <td data-title="Subtotal"><span class="amount">{{ ($total) }} VNĐ</span></td>
                </tr>
                <tr class="order-total">
                    <th>Thành Tiền: </th>
                    <td data-title="Total"><strong><span class="amount">{{ ($total) }} VNĐ</span></strong>
                        <br>
                        <br>
                        <br>
                        <button class="btn-danger" style="width: 200px;" href="javascript:void(0)" id="checkout">Đặt hàng</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </header>
</article>
<div style="clear: both;"></div>
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
@endsection @include('particals.contents') @endsection @section('footer') @include('particals.footer') @endsection @push('scripts')
<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('.remove').click(function(e) {
    e.preventDefault();

    var id = $(this).data('id');

    $.ajax({

        cache: false,
        method: 'DELETE',
        url: '/cart/delete/' + id,
        data: {
            id: id,
        },
        dataType: 'JSON',
        success: function(data) {
            alert('Bạn đã xóa thành công sản phẩm khỏi giỏ hàng');
            window.location.reload();

        },
        error: function(data) {

        }
    });
});

$('#checkout').click(function(e) {
    e.preventDefault();

    var method = $('input[name=method]:checked').val();
    var address = $('#address').val();
    var phone = $('#phone').val();

    $.ajax({

        cache: false,
        method: 'POST',
        url: '/cart/store',
        data: {
            method: method,
            address: address,
            phone: phone,
        },

        dataType: 'JSON',
        success: function(data) {
            alert("Bạn đã đặt hàng thành công, cảm ơn bạn");
            window.location.assign("/");
        },
        error: function(data) {
            if (data.status == 401) {
                alert('Vui lòng đăng nhập trước khi đặt hàng');
                $('#loginModal').modal('show');
            }
            if (data.status === 422) {
                var errors = data.responseJSON;

                $('#error-address').text(errors['address']);
                $('#error-phone').text(errors['phone']);
                $('#error-method').text(errors['method']);
            }
        }
    });
});
</script>
@endpush
