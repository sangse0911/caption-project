@extends('admin.master')
@section('content')
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
                        <th>Tên</th>
                        <th>Email liên hệ</th>
                        <th>Quyền</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($admins as $admin)
                    <tr>
                        <td>{{ $admin->id }}</td>
                        <td>{{ $admin->name }}</td>
                        <td>{{ $admin->email }}</td>
                        <td>
                        @php
                            switch ($admin->role_id) {
                                case (2):
                                    echo 'Nhân viên';
                                    break;
                                default:
                                    echo 'Quản lí';
                                    break;
                            }
                        @endphp

                        </td>
                        <td align="center">
                            <button data-id="{{ $admin->id }}" type="button" class="btn btn-warning btn-sm btn-view label-left b-a-0 waves-effect waves-light" data-toggle="modal" data-target="#myModal">
                                <span class="btn-label"><i class="fa fa-eye" ></i></span> Xem
                            </button>
                            &nbsp
                            <button type="button" data-id="{{ $admin->id }}" class="btn btn-success btn-sm btn-update label-left b-a-0 waves-effect waves-light" data-toggle="modal" data-target="#myModal">
                                <span class="btn-label"><i class="fa fa-edit"></i></span> Sửa
                            </button>
                            &nbsp
                            <button data-id="{{ $admin->id }}" type="button" class="btn btn-danger btn-sm label-left b-a-0 waves-effect waves-light">
                                <span class="btn-label"><i class="fa fa-trash-o  fa-fw"></i></span> Xóa
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <form type="hidden" name="" id="admin" method="POST">
            {!! csrf_field() !!}
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
                                <label for="name">Tên quản lí</label>
                                <input type="text" name="name" class="form-control" id="name" value="" placeholder="Tên quản lí">
                                <span class="help-block">
                                    <strong id="error-name"></strong>
                                </span>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success btn-default  b-a-0 waves-effect waves-light" id="admin-create">Tạo mới</button>
                            <button type="button" class="btn btn-success btn-default  b-a-0 waves-effect waves-light" style="display: none;" id="admin-update">Lưu</button>
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
@parent
<script>

$('#create').click(function(e) {
    $('#error-name').text('');
    $('#error-phone').text('');
    $('#error-email').text('');
    $('#name').val('');
    $('#phone').val('');
    $('#email').val('');
    $('#admin-create').removeAttr('style');
    $('#admin-update').css('display','none');
    $('.modal-title').text('Thêm mới nhân viên');
});

$('#admin-create').click(function(e) {
    $('#error-name').text('');
    $('#error-phone').text('');
    $('#error-email').text('');
});
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('#admin').submit(function(evt) {

    var formData = new FormData(this);

    $.ajax({
        async: true,
        method: 'POST',
        url: '/admin/store',
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'JSON',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(data) {
            alert('Thêm mới sách thành công');
            window.location.assign('/admins');
        },
        error: function(data) {
            if(data.status === 422) {
                var errors = data.responseJSON;

                $('#error-name').text(errors['name']);
                $('#error-phone').text(errors['phone']);
                $('#error-email').text(errors['email']);
            }
        }
    });
    evt.preventDefault();
});

$('.btn-update').click(function(e) {

    $('#admin-create').css('display', 'none');
    $('#admin-update').removeAttr('style');

    var id = $(this).data('id');

    $.ajax({
        cache: false,
        method: 'GET',
        dataType: 'JSON',
        url: '/admin/' + id,
        success: function(data) {
            $('.modal-title').text('Thay đổi thông tin nhân viên');
            $('#id').val(data['id']);
            $('#phone').val(data['phone']);
            $('#email').val(data['email']);
            $('#name').val(data['name']);
        },
        error:function(data) {
        }
    });
});

$('#admin-update').click(function(e) {
    var id = $('#id').val();
    var phone = $('#phone').val();
    var email = $('#email').val();
    var name = $('#name').val();

    $.ajax({
        cache: false,
        method: 'PUT',
        dataType: 'JSON',
        data: {
            id: id,
            phone: phone,
            name: name,
            email: email
        },
        url: '/admin/update',
        success: function(data) {
            alert('Cập nhật thông tin nhân viên thành công');
            window.location.reload(true);
        },
        error: function(data) {
            if(data.status === 422) {
                var errors = data.responseJSON;

                $('#error-name').text(errors['name']);
                $('#error-phone').text(errors['phone']);
                $('#error-email').text(errors['email']);
            }
        }
    });
});

</script>


@endsection
