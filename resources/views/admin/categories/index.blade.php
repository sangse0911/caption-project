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
                                <button id="" type="button" class="btn btn-warning btn-sm label-left b-a-0 waves-effect waves-light">
                                <span class="btn-label"><i class="fa fa-eye" ></i></span>
                                Xem
                            </button>
                            &nbsp
                            <button type="button" id="update" class="btn btn-success btn-sm btn-update label-left b-a-0 waves-effect waves-light" data-toggle="modal" data-target="#myModal">
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
                            </div>
                            <div class="form-group">
                                <input type="file" class="dropify" name="images[]" id="image" multiple="multiple">
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success btn-default  b-a-0 waves-effect waves-light" id="category-create">Tạo mới</button>
                            <button type="button" class="btn btn-success btn-default  b-a-0 waves-effect waves-light" style="display: none;" id="category-update">Lưu</button>
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
                'X-CSRF-TOKEN': $('meta[name="token"]').attr('content')
            },
            success: function(data) {
                window.location.reload(true);
            },
            error: function(data) {
                console.log(data);
            }
        });
        evt.preventDefault();
    });

    </script>
@endsection
