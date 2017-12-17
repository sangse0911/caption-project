@extends('admin.master') @section('content')
<div class="content-area py-1">
    <div class="container-fluid">
        <ol class="breadcrumb no-bg mb-1">
            <div style="float: right;">
                <button type="button" class="btn btn-info btn-lg label-right b-a-0 waves-effect waves-light" data-toggle="modal" data-target="#myModal" id="create">
                    <span class="btn-label"><i class="fa fa-user-plus"></i></span> Thêm
                </button>
            </div>
        </ol>
        <div class="box box-block bg-white">
            <table class="table table-striped table-bordered dataTable" id="table-1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Số điện thoại liên hệ</th>
                        <th>Email liên hệ</th>
                        <th>Địa chỉ liên hệ</th>
                        <th>Số tài khoản</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contacts as $contact)
                    <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->address }}</td>
                        <td>{{ $contact->account }}</td>
                        <td align="center">
                            <button id="{{ $contact->id }}" type="button" class="btn btn-warning btn-sm label-left b-a-0 waves-effect waves-light">
                                <span class="btn-label"><i class="fa fa-eye" ></i></span> Xem
                            </button>
                            &nbsp
                            <button type="button" id="update-{{ $contact->id }}" class="btn btn-success btn-sm btn-update label-left b-a-0 waves-effect waves-light" data-toggle="modal" data-target="#myModal">
                                <span class="btn-label"><i class="fa fa-edit"></i></span> Sửa
                            </button>
                            &nbsp
                            <button id="view-{{ $contact->id }}" type="button" class="btn btn-danger btn-sm label-left b-a-0 waves-effect waves-light">
                                <span class="btn-label"><i class="fa fa-trash-o  fa-fw"></i></span> Xóa
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <form type="hidden" name="" id="" method="POST">
            {{ csrf_field() }}
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog modal-lg">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Thêm mới liên hệ</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="phone">Điện thoại liên hệ</label>
                                <input type="hidden" id="id" value="">
                                <input type="text" name="phone" class="form-control" id="phone" value="" placeholder="Điện thoại liên hệ">
                                <span class="help-block">
                                    <strong id="error-phone"></strong>
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="email">Email liên hệ</label>
                                <input type="email" name="email" class="form-control" id="email" value="" placeholder="Email liên hệ">
                                <span class="help-block">
                                    <strong id="error-email"></strong>
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="address">Địa chỉ liên hệ</label>
                                <input type="text" name="address" class="form-control" id="address" value="" placeholder="Địa chỉ liên hệ">
                                <span class="help-block">
                                    <strong id="error-address"></strong>
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="address">Số tài khoản ngân hàng</label>
                                <input type="text" name="account" class="form-control" id="account" value="" placeholder="Tài khoản ngân hàng">
                                <span class="help-block">
                                    <strong id="error-account"></strong>
                                </span>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success btn-default  b-a-0 waves-effect waves-light" id="contact-create">Tạo mới</button>
                            <button type="button" class="btn btn-success btn-default  b-a-0 waves-effect waves-light" style="display: none;" id="contact-update">Lưu</button>
                            <button type="button" class="btn btn-danger btn-default" data-dismiss="modal">Đóng</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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

    $('#create').click(function(e) {
        $('#phone').val("");
        $('#email').val("");
        $('#address').val("");
        $('#error-address').text("");
        $('#error-email').text("");
        $('#error-phone').text("");
        $('#error-account').text("");
        $('#contact-create').removeAttr('style');
        $('#contact-update').css('display','none');
    });


    $('#contact-create').on('click', function(e) {
        $('#error-address').text("");
        $('#error-email').text("");
        $('#error-phone').text("");
        $('#error-account').text("");

        var phone = $('#phone').val();
        var email = $('#email').val();
        var address = $('#address').val();
        var account = $('#account').val();

        $.ajax({

            cache: false,
            method: 'POST',
            dataType: 'JSON',
            url: '/contact/store',
            data: {
                phone: phone,
                email: email,
                address: address,
                account: account,
            },
            success: function() {
                window.location.reload(true);
            },
            error: function(data) {
                if(data.status === 422) {
                    var errors = data.responseJSON;
                    $('#error-address').text(errors['address']);
                    $('#error-email').text(errors['email']);
                    $('#error-phone').text(errors['phone']);
                }
            }
        });
        // console.log(data),
        e.preventDefault();
    });
    $('.btn-update').on('click', function(e) {
        var contact_id = e.currentTarget.id.substring(7);

        $.ajax({
            cache: false,
            method: 'GET',
            dataType: 'JSON',
            url: '/contact/' + contact_id,
            success: function(data){
                console.log(data);
                $('.modal-title').text('Thay đổi thông tin liên hệ');
                $('#phone').val(data['phone']);
                $('#id').val(data['id']);
                $('#email').val(data['email']);
                $('#address').val(data['address']);
                $('#account').val(data['account']);
                $('#contact-create').css('display','none');
                $('#contact-update').removeAttr('style');
            },
            error: function(data){

            }
        });
    });
    $('#contact-update').on('click', function(e){

        var phone = $('#phone').val();
        var id = $('#id').val();
        var email = $('#email').val();
        var address = $('#address').val();
        var account = $('#account').val();

        $.ajax({

            cache: false,
            method: 'PUT',
            dataType: 'JSON',
            url: '/contact/update',
            data: {
                id: id,
                phone: phone,
                email: email,
                address: address,
                account: account
            },
            success: function(data) {
                alert('Cập nhật thông tin liên hệ thành công');
                window.location.reload(true);
            },
            error: function(data) {
                if(data.status === 422) {
                    var errors = data.responseJSON;
                    $('#error-address').text(errors['address']);
                    $('#error-email').text(errors['email']);
                    $('#error-phone').text(errors['phone']);
                    $('#error-account').text(errors['account']);
                }
            }
        });
        e.preventDefault();
    });
</script>
@endsection
