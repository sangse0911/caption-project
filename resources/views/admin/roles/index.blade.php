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
                        <th>Ten</th>
                        <th>Hanh dong</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($roles as $role)
                    <tr>
                        <td>{{ $role->id }}</td>
                        <td>{{ $role->name }}</td>
                        <td align="center">
                            <button id="{{ $role->id }}" type="button" class="btn btn-warning btn-sm label-left b-a-0 waves-effect waves-light">
                            <span class="btn-label"><i class="fa fa-eye" ></i></span>
                            Xem
                        </button>
                        &nbsp
                        <button type="button" id="update-{{ $role->id }}" class="btn btn-success btn-sm btn-update label-left b-a-0 waves-effect waves-light" data-toggle="modal" data-target="#myModal">
                            <span class="btn-label"><i class="fa fa-edit"></i></span>
                            Sửa
                        </button>
                        &nbsp
                        <button id="view-{{ $role->id }}" type="button" class="btn btn-danger btn-sm label-left b-a-0 waves-effect waves-light">
                            <span class="btn-label"><i class="fa fa-trash-o  fa-fw"></i></span>
                            Xóa
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
                            <h4 class="modal-title">Them moi quyen han</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name">Tean quyen han</label>
                                <input type="hidden" id="id" value="">
                                <input type="text" name="name" class="form-control" id="name" value="" placeholder="Ten quyen han">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success btn-default  b-a-0 waves-effect waves-light" id="role-create">Tao moi</button>
                            <button type="button" class="btn btn-success btn-default  b-a-0 waves-effect waves-light" style="display: none;" id="role-update">Luu</button>
                            <button type="button" class="btn btn-danger btn-default" data-dismiss="modal">Dong</button>
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

    $('#role-create').on('click', function(e) {

        var name = $('#role').val();

        $.ajax({

            cache: false,
            method: 'POST',
            dataType: 'JSON',
            url: '/role/store',
            data: {
                name: name
            },
            success: function() {
                window.location.reload(true);
            },
            error: function(data) {
                console.log('ee', data);
            }
        });
        // console.log(data),
        e.preventDefault();
    });
    $('.btn-update').on('click', function(e) {
        var role_id = e.currentTarget.id.substring(7);
        $.ajax({
            cache: false,
            method: 'GET',
            dataType: 'JSON',
            url: '/role/' + role_id,
            success: function(data){
                console.log(data);
                $('.modal-title').text('Thay doi thong tin quyen han');
                $('#name').val(data['name']);
                $('#id').val(data['id']);
                $('#role-create').css('display','none');
                $('#role-update').removeAttr('style');
            },
            error: function(data){
                console.log('ee', data);
            }
        });
    });
     $('#role-update').on('click', function(e){
        var name = $('#name').val();
        var id = $('#id').val();

        $.ajax({

            cache: false,
            method: 'PUT',
            dataType: 'JSON',
            url: '/role/update',
            data: {
                id: id,
                name: name,

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
</script>
@endsection
