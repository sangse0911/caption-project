@extends('admin.master')

@section('content')
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
                            <div class="form-group">
                                <label for="name">Ten nguoi dung</label>
                                <input type="hidden" name="id" value="" id="id">
                                <input type="text" name="name" class="form-control" id="name" value="" placeholder="Ten nguoi dung">

                            </div>
                             <div class="form-group">
                                <label for="email">Email nguoi dung</label>
                                <input type="email" name="email" class="form-control" id="email" value="" placeholder="Email nguoi dung">

                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-info btn-default  b-a-0 waves-effect waves-light" id="add">Them</button>
                            <button type="button" class="btn btn-info btn-default  b-a-0 waves-effect waves-light" style="display: none;" id="update">Luu</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Dong</button>
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
                        <td>
                            <button type="button" class="btn btn-info btn-default  btn-update "
                            id="update-{{ $user->id }}" data-toggle="modal" data-target="#myModal">Sua</button>
                            <button type="button" class="btn btn-info btn-default  btn-delete "
                            id="delete-{{ $user->id }}">Xoa</button>
                            <button type="button" class="btn btn-info btn-default  btn-supplier"
                            id="add-{{ $user->id }}">Nha cung cap</button>
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
    $(document).on('focus', 'input' , function() {
        $(this).removeAttr('placeholder');
    });
    $(document).on('focusout', 'input', function(){
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
</script>
@endsection
