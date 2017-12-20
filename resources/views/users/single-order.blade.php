@extends('layouts.master') @section('style')
<link rel="stylesheet" type="text/css" href="{{ URL::to('css/jquery.dataTables.min.css') }}"> @endsection @section('header-v2') @include('particals.header-v2') @endsection() @section('nav-v2') @include('particals.nav-bar-v2') @endsection @section('content') @section('customer')
<article class="page type-page status-publish hentry" style="margin-top: 50px;">
    <header class="entry-header">
        <h1 itemprop="name" class="entry-title" style="text-transform: uppercase; color: red;">Danh sách đơn hàng</h1>
    </header>
    <form type="hidden" name="" id="admin" method="POST">
        {!! csrf_field() !!}
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg" style="max-width: 1170px;">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Thông tin đơn hàng</h4>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="id" value="">
                        <div class="box box-block bg-white">
                            <table class="table table-striped table-bordered dataTable">
                                <thead>
                                    <tr>
                                        <th>Tên sách</th>
                                        <th>Số lượng</th>
                                        <th>Đơn gía</th>
                                    </tr>
                                </thead>
                                <tbody id="order">
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-12" style="clear: both;">
                            <div class="form-group col-md-3" style="display: block; float: right; clear: both;">
                                <label for="name">Tổng tiền</label>
                                <input type="text" name="total-price" class="form-control" id="total-price" value="" readonly>
                            </div>
                        </div>
                        <div class="form-group col-md-6" style="display: inline-flex; align-items: center;">
                            <ul>
                                <li>Tên khách hàng: </li>
                                <li>Số điện thoại: </li>
                                <li>Email liên hệ: </li>
                                <li>Địa chỉ: </li>
                            </ul>
                            <ul style="list-style-type: none; color: red;">
                                <li id="customer"></li>
                                <li id="phone"></li>
                                <li id="email"></li>
                                <li id="address"></li>
                            </ul>
                        </div>
                        <div class="form-group col-md-6">
                        </div>
                        <div class="form-group col-sm-6" style="display: block; float: right;">
                            <label for="name">Trạng thái</label>
                            <br/>
                            <label class="radio-inline">
                                <input type="radio" name="status" value="0">Đơn hàng mới
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="status" value="1">Đã xác nhận</label>
                            <label class="radio-inline">
                                <input type="radio" name="status" value="2">Đã hoàn thành </label>
                            <label class="radio-inline">
                                <input type="radio" name="status" value="3">Đã hủy</label>
                        </div>
                    </div>
                    <div style="clear: both;"></div>

                </div>
            </div>
        </div>
    </form>
    <div class="box box-block bg-white">
        <table class="table table-striped table-bordered dataTable" id="table-1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Số điện thoại</th>
                    <th>Trạng thái</th>
                    <th>Phương thức thanh toán</th>
                    <td>Hành động</td>
                </tr>
            </thead>
            <tbody>
                {{-- {{ dd($orders) }} --}} @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->phone }}</td>
                    <td>
                        @php
                        	switch ($order->status) {
                        		case '1':
	                        		echo 'Đã xác nhận';
	                        		break;
                        		case '2':
                        			echo 'Đã hoàn thành';
                        			break;
                    			case '3':
                    				echo 'Đã hủy';
                    				break;
                				default:
                					echo 'Mới';
                					break;
            				}
        				@endphp
                    </td>
                    <td>
                        @php
                        	switch ($order->method) {
                        		case '1':
                        		echo 'Thẻ ngân hàng';
                        		break;
                        		default:
                        			echo 'Tiền mặt';
                        			break;
                        		}
                		@endphp
                    </td>
                    <td align="center">
                        <button id="{{ $order->id }}" data-id="{{ $order->id }}" type="button" class="btn btn-warning btn-view" data-toggle="modal" data-target="#myModal">
                            <span class="btn-label"><i class="fa fa-eye" ></i></span> Xem
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</article>
@endsection @section('recently') @include('particals.recently') @endsection @section('sidebar') @include('particals.sidebar') @endsection @include('particals.contents') @endsection @push('scripts')
<script>
$('#sidebar').css('margin-top', '150px');

$('.btn-view').on('click', function(e) {

    var id = $(this).data('id');
    var array = [];
    var count = 0;
    var total = 0;
    $.ajax({
        cache: false,
        method: 'GET',
        dataType: 'JSON',
        url: '/detailOrders/' + id,
        success: function(data) {
            if (data['books'].length == 0) {

            } else {
                var order = $('#order');
                $('#order').html('');
                for (var i = 0; i < (data['books'].length); i++) {
                    var row = document.createElement('tr');
                    var name = document.createElement('td');
                    name.innerHTML = data['books'][i]['name'];
                    var quantity = document.createElement('td');
                    quantity.innerHTML = data['detail_orders'][i]['quantity'];
                    var price = document.createElement('td');
                    price.innerHTML = data['books'][i]['price'];
                    $(row).append(name, quantity, price);
                    order.append(row);
                };
            }
            $('#customer').text(data['user']['name']);
            $('#id').val(id);
            $('#email').text(data['user']['email']);
            $('#phone').text(data['phone']);
            $('#address').text(data['address']);
            $('input[type=radio][name="status"][value=' + data['status'] + ']').prop('checked', true);
            for (var i = 0; i < data['books'].length; i++) {
                array.push(data['books'][i]['name']);
            }
            $('#name').val(array);
            for (var i = 0; i < data['detail_orders'].length; i++) {
                count++;
                total += data['detail_orders'][i]['total_price'];
            }
            $('#quantity').val(count);

            $('#total-price').val(total);
        },
        error: function(data) {
            alert('ee', data);
        }
    });
});
</script>
@endpush
