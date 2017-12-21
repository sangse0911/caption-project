@extends('admin.master')

@section('content')
<div class="content-area py-1">
    <div class="container-fluid">
        <ol class="breadcrumb no-bg mb-1">
            <div style="float: right;">
                <button type="button" class="btn btn-info btn-lg label-right b-a-0 waves-effect waves-light" data-toggle="modal" data-target="#myModal" id="category-create">
                    <span class="btn-label"><i class="fa fa-user-plus"></i></span> Thêm thể loại sách
                </button>
            </div>
        </ol>
        <div class="box box-block bg-white">
            <table class="table table-striped table-bordered dataTable" id="table-1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên</th>
                        <th align="center">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td align="center">
                                <button type="button" class="btn btn-warning btn-sm btn-view label-left b-a-0 waves-effect waves-light" data-toggle="modal" data-target="#myModal" data-id="{{ $category->id }}">
                                <span class="btn-label"><i class="fa fa-eye" ></i></span>
                                Xem
                            </button>
                            &nbsp
                            <button type="button" id="update" class="btn btn-success btn-sm btn-update label-left b-a-0 waves-effect waves-light" data-toggle="modal" data-target="#myModal" data-id="{{ $category->id }}">
                                <span class="btn-label"><i class="fa fa-edit"></i></span>
                                Sửa
                            </button>
                            &nbsp
                            <button id="view" type="button" class="btn btn-danger btn-sm label-left b-a-0 waves-effect waves-light">
                                <span class="btn-label"><i class="fa fa-trash-o  fa-fw"></i></span>
                                Xóa
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <form enctype="multipart/form-data" type="hidden" name="" id="category-action" method="POST">
            {{ csrf_field() }}
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog modal-lg">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Thêm mới thể loại sách</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name">Tên</label>
                                <input type="hidden" id="id" value="">
                                <input type="text" name="name" class="form-control" id="name" value="" placeholder="Tên">
                                <span class="help-block">
                                    <strong id="error-name"></strong>
                                </span>
                            </div>
                            <div class="form-group image">
                                <input type="file" class="dropify" name="images[]" id="image" multiple="multiple">
                                <span class="help-block">
                                    <strong id="error-image"></strong>
                                </span>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success btn-default  b-a-0 waves-effect waves-light" id="create">Tạo mới</button>
                            <button type="button" class="btn btn-success btn-default  b-a-0 waves-effect waves-light" style="display: none;" id="update-category">Lưu</button>
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

    $('#category-create').click(function(e) {
        $('#name').val("").prop('disabled', false);
        $('#error-name').text("");
        $('#update-category').css("display","none");
        $('#create').removeAttr('style');
        $('.modal-footer').removeAttr('style');

    });

    $('.btn-view').click(function(e) {
        var category_id = $(this).data('id');
        console.log(category_id);

        $.ajax({
            cache: false,
            method: 'GET',
            dataType: 'JSON',
            url: '/admin/category/' + category_id,
            success: function(data){
                $('.modal-title').text('Thông tin thể loại sách');
                $('#name').val(data['name']).prop('readonly', true);
                $('#id').val(data['id']);
                $('#update-category').removeAttr("style");
                $('#create').css("display","none");
                $('.image').css('display', 'none');
                $('.modal-footer').css('display','none');
            },
            error: function(data){
            }
        });
    });

    $('.btn-update').on('click', function(e) {
        var category_id = $(this).data('id');

        $.ajax({
            cache: false,
            method: 'GET',
            dataType: 'JSON',
            url: '/admin/category/' + category_id,
            success: function(data){
                $('.modal-title').text('Thay đổi thông tin thể loại');
                $('#name').val(data['name']).prop('readonly', false);
                $('#id').val(data['id']);
                $('#update-category').removeAttr("style");
                $('#create').css("display","none");
                $('.image').css('display', 'none');
                $('.modal-footer').removeAttr('style');
            },
            error: function(data){
            }
        });
    });

    $('#update-category').click(function(e) {

        var name = $('#name').val();
        var id = $('#id').val();

        $.ajax({

            cache: false,
            method: 'PUT',
            dataType: 'JSON',
            url: '/admin/category/update',
            data: {
                id: id,
                name: name,
            },
            success: function(data) {
                alert('Cập nhật thông tin thể loại sách thành công');
                window.location.reload(true);
            },
            error: function(data) {
                if(data.status === 422) {
                    var errors = data.responseJSON;
                    $('#error-name').text(errors['name']);
                }
            }
        });
        e.preventDefault();
    });

    $('#category-action').submit(function(evt) {

        var formData = new FormData(this);

        $.ajax({
            async: true,
            method: 'POST',
            url: '/admin/category/store',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'JSON',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data) {
                alert('Thêm mới thể loại sách thành công');
                window.location.reload(true);
            },
            error: function(data) {
                if(data.status === 422) {
                    var errors = data.responseJSON;
                    $('#error-name').text(errors['name']);
                    $('#error-image').text(errors['images']);
                }
            }
        });
        evt.preventDefault();
    });

</script>
@endsection
