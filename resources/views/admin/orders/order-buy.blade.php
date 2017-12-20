@extends('admin.master') @section('title') Trang Quản Trị | Đơn Hàng Bán @endsection @section('css') @endsection @section('content')
<div class="content-area py-1">
    <div class="container-fluid">
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
                                <label for="name">Trạng thái</label><br/>
                                <label class="radio-inline" style="display: none;">
                                    <input type="radio" name="status" value="0"></label>
                                <label class="radio-inline">
                                    <input type="radio" name="status" value="1">Đã xác nhận</label>
                                <label class="radio-inline">
                                    <input type="radio" name="status" value="2">Đã hoàn thành </label>
                                <label class="radio-inline">
                                    <input type="radio" name="status" value="3">Đã hủy</label>
                            </div>
                        </div>
                        <div style="clear: both;"></div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success btn-default  b-a-0 waves-effect waves-light" id="order-update">Cập nhật</button>
                            <button type="button" class="btn btn-success btn-default  b-a-0 waves-effect waves-light" style="display: none;" id="admin-update">Lưu</button>
                            <button type="button" class="btn btn-danger btn-default" data-dismiss="modal">Đóng</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        {{-- {{ dd($orders) }} --}}
        <div class="box box-block bg-white">
            <table class="table table-striped table-bordered dataTable" id="table-1">
                <thead>
                    <tr>
                        <th>Mã số đơn hàng</th>
                        <th>Ngày tạo</th>
                        <th>Ngày cập nhật</th>
                        <th>Trạng thái</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    @if($order->books->count() >0)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->created_at }}</td>
                        <td>{{ $order->updated_at }}</td>
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
                                        echo 'Đã hủy đơn';
                                        break;

                                    default:
                                        echo 'Đơn hàng mới';
                                        break;
                                }
                            @endphp
                        </td>
                        <td align="center">
                            <button type="button"  data-id="{{ $order->id }}" class="btn btn-success btn-sm btn-update label-left b-a-0 waves-effect waves-light" data-toggle="modal" data-target="#myModal">
                                <span class="btn-label"><i class="fa fa-edit"></i></span> Sửa
                            </button>
                            &nbsp
                        </td>
                    </tr>
                    @else
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.btn-update').on('click', function(e) {

        var id = $(this).data('id');
        var array = [];
        var count = 0;
        var total = 0;
        $.ajax({
            cache: false,
            method: 'GET',
            dataType: 'JSON',
            url: '/admin/orderBuy/' + id,
            success: function(data) {
                if(data['books'].length == 0) {

                }else {
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
                for(var i= 0; i< data['books'].length; i++) {
                    array.push(data['books'][i]['name']);
                }
                $('#name').val(array);
                for(var i =0; i< data['detail_orders'].length; i++) {
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

    $('#order-update').click(function(e) {
        var id = $('#id').val();
        var status = $('input[name=status]:checked').val();
        $.ajax({
            cache: false,
            method: 'PUT',
            dataType: 'JSON',
            data: {
                id: id,
                status: status
            },
            url: '/admin/order/update',
            success: function(data) {
                alert('Cập nhật trạng thái đơn hàng thành công');
                window.location.reload(true);
            },
            error: function(data) {
                if(data.status === 422) {
                    var errors = data.responseJSON;
                }
            }
        });
        e.preventDefault();
    });

</script>
@endsection
