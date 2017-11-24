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
        <form enctype="multipart/form-data" type="hidden" name="" id="" method="POST">
            {{ csrf_field() }}
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog modal-lg">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Them moi nguoi dung</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group" id="form-name">
                                <label for="name">Ten nguoi dung</label>
                                <input type="hidden" name="id" value="" id="id">
                                <input type="text" name="name" class="form-control" id="name">
                            </div>
                            <div class="form-group" id="form-status">
                                <label class="radio-inline">
                                    <input type="radio" name="status" value="1">Binh thuong</label>
                                <label class="radio-inline">
                                    <input type="radio" name="status" value="2">Cam</label>
                                <label class="radio-inline">
                                    <input type="radio" name="status" value="3">Canh cao</label>
                            </div>
                            <div class="form-group" id="form-phone" style="display: none;">
                                <label for="name">So dien thoai</label>
                                <input type="text" name="phone" class="form-control" id="phone">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-info btn-default b-a-0 waves-effect waves-light" id="user-update">Luu</button>
                            <button type="button" class="btn btn-info btn-default b-a-0 waves-effect waves-light" id="supplier-create" style="display: none;">Them moi</button>
                            <button type="button" class="btn btn-danger btn-default" data-dismiss="modal">Dong</button>
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
                        <th>Hanh dong</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->account_status }}</td>
                        <td align="center">
                            <button type="button" id="update-{{ $user->id }}" class="btn btn-success btn-sm btn-update label-left b-a-0 waves-effect waves-light" data-toggle="modal" data-target="#myModal">
                                <span class="btn-label"><i class="fa fa-edit"></i></span> Sửa
                            </button>
                            &nbsp
                            <button id="delete-{{ $user->id }}" type="button" class="btn btn-danger btn-sm label-left b-a-0 waves-effect waves-light">
                                <span class="btn-label"><i class="fa fa-trash-o  fa-fw"></i></span> Xóa
                            </button>
                            <button id="supplier-{{ $user->id }}" type="button" class="btn btn-success btn-sm btn-supplier label-left b-a-0 waves-effect waves-light" data-toggle="modal" data-target="#myModal">
                                <span class="btn-label"><i class="fa fa-user-plus  fa-fw"></i></span> Khach ban
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection @section('script')
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
    var url_user_store = '{{ route('user.store')}}';
    $('#add').on('click', function(e) {

        var name = $('#name').val();
        var email = $('#email').val();

        $.ajax({

            cache: false,
            method: 'POST',
            dataType: 'JSON',
            url: url_user_store,
            data: {
                name: name,
                email: email,
            },
            success: function() {
                window.location.reload(true);
            },
            error: function(data) {
                console.log('ee', data);
            }
        });

        e.preventDefault();
    });
    $('.btn-update').click(function(e) {
        var user_id = e.currentTarget.id.substring(7);
        $.ajax({
            cache: false,
            method: 'GET',
            dataType: 'JSON',
            url: '/admin/users/' + user_id,
            success: function(data) {
                $('.modal-title').text('Cap nhat nguoi dung');
                $('#id').val(data['id']);
                $('#name').val(data['name']);
                $('#name').attr("readonly", true);
                $('input[type=radio][name="status"][value='+data['account_status']+']').prop('checked', true);
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

        $.ajax({

            cache: false,
            method: 'PUT',
            dataType: 'JSON',
            url: '/admin/users/update',
            data: {
                id: id,
                status: status,
            },
            success: function(data) {
                // console.log('ss', data);
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
        var user_id = e.currentTarget.id.substring(9);
        $.ajax({
            cache: false,
            method: 'GET',
            dataType: 'JSON',
            url: '/admin/users/' + user_id,
            success: function(data) {
                $('.modal-title').text('Them moi nha cung cap');
                $('#id').val(data['id']);
                $('#name').val(data['name']);
                $('#form-status').css("display", "none");
                $('#form-name').css("display","none");
                $('#user-update').css("display","none");
                $('#supplier-create').removeAttr("style");
                $('#form-phone').removeAttr("style");
            },
            error: function(data) {
                console.log('ee',data);
            }
        });
        e.preventDefault();
    });
    $('#supplier-create').on('click', function(e){

        var phone =  $('#phone').val();
        var name = $('#name').val();
        var id = $('#id').val();
        $.ajax({

            cache: false,
            method: 'POST',
            dataType: 'JSON',
            url: '/supplier/createIfExistUser',
            data: {
                id: id,
                phone: phone,
                name: name,
            },
            success: function(data) {
                window.location.assign('/suppliers');
            },
            error: function(data) {
                console.log('ee', data);
            }
        });

        e.preventDefault();
    });
</script>
@endsection
