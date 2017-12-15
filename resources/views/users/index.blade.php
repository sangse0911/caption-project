@extends('admin.master') @section('content')
<div class="content-area py-1">
    <div class="container-fluid">
        <ol class="breadcrumb no-bg mb-1">
            <div style="float: right;">
                <button type="button" class="btn btn-info btn-lg label-right b-a-0 waves-effect waves-light" data-toggle="modal" data-target="#myModal" id="user-create">
                    <span class="btn-label"><i class="fa fa-user-plus"></i></span> Thêm
                </button>
            </div>
        </ol>
        <form enctype="multipart/form-data" type="hidden" name="" id="add-user" method="POST">
            {{-- {{ csrf_field() }} --}}
            <input type="hidden" name="token" id="token" value="{{ csrf_token() }}">
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog modal-lg">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Thêm mới người dùng</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group" id="form-name">
                                <label for="name">Tên người dùng</label>
                                <input type="hidden" name="id" value="" id="id">
                                <input type="text" name="name" class="form-control" id="name">
                            </div>
                            <div class="form-group" id="form-email">
                                <label for="email">Email người dùng</label>
                                <input type="email" name="email" class="form-control" id="email">
                            </div>
                            <div class="form-group" id="form-name">
                                <label for="phone">Số điện thoại</label>
                                <input type="text" name="phone" class="form-control" id="phone">
                            </div>
                            <div class="form-group" id="form-status">
                                <label class="radio-inline">
                                    <input type="radio" name="status" value="1">Bình thường</label>
                                <label class="radio-inline">
                                    <input type="radio" name="status" value="2">Cấm</label>
                                <label class="radio-inline">
                                    <input type="radio" name="status" value="3">Cảnh cáo</label>
                            </div>
                            <div class="form-group" id="form-phone" style="display: none;">
                                <label for="name">Số điện thoại </label>
                                <input type="text" name="phone" class="form-control" id="phone">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-info btn-default b-a-0 waves-effect waves-light" id="create-user">Thêm mới</button>
                            <button type="button" class="btn btn-info btn-default b-a-0 waves-effect waves-light" id="supplier-create" style="display: none;">Thêm mới</button>
                            <button type="button" class="btn btn-info btn-default b-a-0 waves-effect waves-light" id="user-update" style="display: none;">Lưu</button>
                            <button type="button" class="btn btn-danger btn-default" data-dismiss="modal">Đóng</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="box box-block bg-white">
            <table class="table table-striped table-bordered dataTable" id="table-1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Trạng Thái</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>

                        <td>
                            <?php

switch ($user->status) {
    case (2):
        echo 'Cấm';
        break;
    case (3):
        echo "Cảnh cáo";
        break;
    default:
        echo 'Bình thường';
        break;
}
?>
                        </td>
                        <td align="center">
                            <button type="button" id="update" class="btn btn-success btn-sm btn-update label-left b-a-0 waves-effect waves-light" data-toggle="modal" data-target="#myModal" data-id="{{ $user->id }}">
                                <span class="btn-label"><i class="fa fa-edit"></i></span> Sửa
                            </button>
                            &nbsp
                            <button id="supplier" type="button" class="btn btn-success btn-sm btn-supplier label-left b-a-0 waves-effect waves-light" data-toggle="modal" data-target="#myModal" data-id="{{ $user->id }}">
                                <span class="btn-label"><i class="fa fa-user-plus  fa-fw"></i></span> Khách bán
                            </button>
                            &nbsp
                            <button id="delete-{{ $user->id }}" type="button" class="btn btn-danger btn-sm label-left b-a-0 waves-effect waves-light">
                                <span class="btn-label"><i class="fa fa-trash-o  fa-fw"></i></span> Xóa
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    $(document).on('focus', 'input', function() {
        $(this).removeAttr('placeholder');
    });
    $(document).on('focusout', 'input', function() {
        $(this).attr('placeholder');
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#user-create').click(function(e) {
        $('#name').val('');
        $('input[type=radio]').prop('checked', false);
        $('#form-status').css('display', 'none');
        $('.modal-title').text('Thêm mới người dùng');
        $('#phone').val('').prop('readonly', false);
        $('#email').val('').prop('readonly', false);
        $('#form-name').css('display', 'none');
        $('#form-email').removeAttr('style');
        $('#create-user').removeAttr('style');
        $('#supplier-create').css('display','none');
        $('#user-update').css('display', 'none');
    });

    var url_user_store = '{{ route('user.store')}}';

    $('#create-user').on('click', function(e) {
        $('#error-address').text("");
        $('#error-email').text("");

        var phone = $('#phone').val();
        var email = $('#email').val();

        $.ajax({

            cache: false,
            method: 'POST',
            dataType: 'JSON',
            url: url_user_store,
            data: {
                phone: phone,
                email: email,
            },
            success: function() {
                window.location.reload(true);
            },
            error: function(data) {
                if(data.status === 422) {
                    var errors = data.responseJSON;
                    $('#error-email').text(errors['email']);
                    $('#error-phone').text(errors['phone']);
                }
            }
        });
        // console.log(data),
        e.preventDefault();
    });

    $('.btn-update').click(function(e) {
        var user_id = $(this).data('id');
        $('#supplier-create').css('display','none');
        $('#user-update').removeAttr('style');
        $('#form-status').removeAttr('style');
        $('#create-user').css('display', 'none');

        $.ajax({
            cache: false,
            method: 'GET',
            dataType: 'JSON',
            url: '/admin/users/' + user_id,
            success: function(data) {
                $('.modal-title').text('Cập nhật người dùng');
                $('#id').val(data['id']);
                $('#name').val(data['name']).prop('readonly', true);
                $('input[type=radio][name="status"][value='+data['status']+']').prop('checked', true);
                $('#phone').val(data['phone']).prop('readonly', true);
                $('#email').val(data['email']).prop('readonly', true);
            },
            error: function(data) {
                console.log('ee',data);
            }
        });
        e.preventDefault();
    });
    $('#user-update').on('click', function(e){

        var status =  $('input[name=status]:checked').val();
        var id = $('#id').val();
        var phone = $('#phone').val();

        $.ajax({

            cache: false,
            method: 'PUT',
            dataType: 'JSON',
            url: '/admin/users/update',
            data: {
                id: id,
                status: status,
                phone: phone
            },
            success: function(data) {
                window.location.reload(true);
            },
            error: function(data) {
                console.log('ee', data);
            }
        });
        // console.log(data),
        e.preventDefault();
    });
    $('.btn-supplier').click(function(e) {
        var user_id = $(this).data('id');

        $('#create-user').css('display', 'none');
        $('#supplier-create').removeAttr('style');
        $('#form-status').removeAttr('style');

        $.ajax({
            cache: false,
            method: 'GET',
            dataType: 'JSON',
            url: '/admin/users/' + user_id,
            success: function(data) {
                $('.modal-title').text('Thêm mới nhà cung cấp');
                $('#id').val(data['id']);
                $('#name').val(data['name']).prop('readonly', true);
                $('input[type=radio][name="status"][value='+data['status']+']').prop('checked', true);
                $('#user-update').css('display','none');
                $('#phone').val(data['phone']).prop('readonly', true);
                $('#email').val(data['email']).prop('readonly', true);
            },
            error: function(data) {
                console.log('ee',data);
            }
        });
        e.preventDefault();
    });

    $('#supplier-create').on('click', function(e){

        var id = $('#id').val();
        window.location.href = "book/create/" + id;

    });
</script>
@endsection
