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
                        <th>Người tạo</th>
                        <th>Trạng thái</th>
                        <th>Địa điểm</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bookshelves as $bookshelf)
                    <tr>
                        <td>{{ $bookshelf->id }}</td>
                        <td>{{ $bookshelf->admin_id }}</td>
                        <td>{{ $bookshelf->status }}</td>
                        <td>{{ $bookshelf->location }}</td>

                        <td align="center">
                                <button data-id="{{ $bookshelf->id }}" type="button" class="btn btn-warning btn-sm btn-view label-left b-a-0 waves-effect waves-light" data-toggle="modal" data-target="#myModal">
                                <span class="btn-label"><i class="fa fa-eye" ></i></span>
                                Xem
                            </button>
                            &nbsp
                            <button type="button" id="update-{{ $bookshelf->id }}" class="btn btn-success btn-sm btn-update label-left b-a-0 waves-effect waves-light" data-toggle="modal" data-target="#myModal">
                                <span class="btn-label"><i class="fa fa-edit"></i></span>
                                Sửa
                            </button>
                            &nbsp
                            <button id="view-{{ $bookshelf->id }}" type="button" class="btn btn-danger btn-sm label-left b-a-0 waves-effect waves-light">
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
                            <h4 class="modal-title">Thêm mới gía sách</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name">Địa điểm gía sách</label>
                                <input type="hidden" id="id" value="">
                                <input type="text" name="location" class="form-control" id="location" value="" placeholder="Địa điểm trên gía sách">
                                <span class="help-block">
                                    <strong id="error-location"></strong>
                                </span>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success btn-default  b-a-0 waves-effect waves-light" id="bookshelf-create">Tạo mới</button>
                            <button type="button" class="btn btn-success btn-default  b-a-0 waves-effect waves-light" style="display: none;" id="bookshelf-update">Lưu</button>
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
    $('#create').click(function() {
        $('.status').css('display','none');
        $('#location').val("");
        $('#error-location').text('');
    })
    $('#bookshelf-create').on('click', function(e) {

        var location = $('#location').val();

        $.ajax({

            cache: false,
            method: 'POST',
            dataType: 'JSON',
            url: '/bookshelf/store',
            data: {
                location: location,
            },
            success: function(data) {
                alert('Thêm mới vị trí gía sách thành công');
                window.location.reload(true);
            },
            error: function(data) {
                if(data.status === 422) {
                    var errors = data.responseJSON;
                    $('#error-location').text(errors['location']);
                }
            }
        });
        e.preventDefault();
    });
    $('.btn-update').on('click', function(e) {
        var bookshelf_id = e.currentTarget.id.substring(7);
        $.ajax({
            cache: false,
            method: 'GET',
            dataType: 'JSON',
            url: '/bookshelf/' + bookshelf_id,
            success: function(data){
                $('.modal-title').text('Thay đổi thông tin gía sách');
                $('#location').val(data['location']).prop('readonly', false);
                $('#id').val(data['id']);
                $('input[type=radio][name="status"][value='+data['status']+']').prop('checked', true);
                $('input[type=radio][name="status"]').prop('disabled', false);
                $('#bookshelf-create').css("display","none");
                $('#bookshelf-update').removeAttr('style');
                $('.status').removeAttr('style');
            },
            error: function(data){
            }
        });
    });
    $('.btn-view').click(function(e) {
        var bookshelf_id = $(this).data('id');
        $.ajax({
            cache: false,
            method: 'GET',
            dataType: 'JSON',
            url: '/bookshelf/' + bookshelf_id,
            success: function(data){
                console.log(data);
                $('.modal-title').text('Thông tin gía sách');
                $('#location').val(data['location']).prop('readonly', true);
                $('#id').val(data['id']);
                $('input[type=radio][name="status"][value='+data['status']+']').prop('checked', true);
                $('input[type=radio][name="status"]').prop('disabled', true);
                $('#bookshelf-create').css("display","none");
                $('#bookshelf-update').removeAttr('style');
                $('.status').removeAttr('style');
                $('.modal-footer').css('display','none');
            },
            error: function(data){
            }
        });
    });


    $('#bookshelf-update').on('click', function(e){
        var location = $('#location').val();
        var status =  $('input[name=status]:checked').val();
        var id = $('#id').val();

        $.ajax({

            cache: false,
            method: 'PUT',
            dataType: 'JSON',
            url: '/bookshelf/update',
            data: {
                id: id,
                location: location,
                status: status,
            },
            success: function(data) {
                alert('Cập nhật trạng thái gía sách thành công');
                window.location.reload(true);
            },
            error: function(data) {
                if(data.status === 422) {
                    var errors = data.responseJSON;
                    $('#error-location').text(errors['location']);
                }
            }
        });
        e.preventDefault();
    });
</script>
@endsection
