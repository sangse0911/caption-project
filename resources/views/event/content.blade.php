@extends('admin.master') @section('content')
<div class="content-area py-1">
    <div class="container-fluid">
        <ol class="breadcrumb no-bg mb-1">
            <div style="float: right;">
                <button type="button" class="btn btn-info btn-lg label-right b-a-0 waves-effect waves-light" data-toggle="modal" data-target="#myModal" id="event-create">
                    <span class="btn-label"><i class="fa fa-user-plus"></i></span> Thêm sự kiện
                </button>
            </div>
        </ol>
        <div class="box box-block bg-white">
            <table class="table table-striped table-bordered dataTable" id="table-1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Mô tả</th>
                        <th>Trạng Thái</th>
                        <th align="center">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($events as $event)
                    <tr>
                        <td>{{ $event->id }}</td>
                        <td>{{ $event->title }}</td>
                        <td>{{ $event->description }}</td>
                        <td>{{ $event->status }}</td>

                        <td align="center">
                                <button id="" type="button" class="btn btn-warning btn-sm label-left b-a-0 waves-effect waves-light">
                                <span class="btn-label"><i class="fa fa-eye" ></i></span>
                                Xem
                            </button>
                            &nbsp
                            <button type="button" id="update" class="btn btn-success btn-sm btn-update label-left b-a-0 waves-effect waves-light" data-toggle="modal" data-target="#myModal" data-id="{{ $event->id }}">
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
         <form enctype="multipart/form-data" type="hidden" name="" id="event-action" method="POST">
            {{ csrf_field() }}
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog modal-lg">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Thêm mới sự kiện</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="title">Tên sự kiện</label>
                                <input type="hidden" name="id" value="" id="id">
                                <input type="text" name="title" class="form-control" id="title" value="" placeholder="Tên sự kiện">
                                <span class="help-block">
                                    <strong id="error-title"></strong>
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="description">Chi tiết sự kiện</label>
                                <textarea class="form-control" name="description" id="description" rows="10" value="" placeholder="Chi tiết sự kiện"></textarea>
                                <span class="help-block">
                                    <strong id="error-description"></strong>
                                </span>
                            </div>
                            <div class="form-group">

                                <label class="radio-inline">
                                    <input type="radio" name="status" value="1">Sẵn sàng</label>
                                <label class="radio-inline">
                                    <input type="radio" name="status" value="0">Không sẵn sàng</label>
                                <br/>
                                <span class="help-block">
                                    <strong id="error-status"></strong>
                                </span>
                            </div>
                            <div class="form-group col-md-6">
                                <h6>Ngày bắt đầu</h6>
                                <input type="text" name="start-date" id="start-date" class="form-control year" placeholder="Ngày bắt đầu">
                                <span class="help-block">
                                    <strong id="error-start"></strong>
                                </span>
                            </div>
                            <div class="form-group col-md-6">
                                <h6>Ngày kết thúc</h6>
                                <input type="text" name="end-date" id="end-date" class="form-control year" placeholder="Ngày kết thúc">
                                <span class="help-block">
                                    <strong id="error-end"></strong>
                                </span>
                            </div>
                            <div class="form-group form-image">
                                <input type="file" class="dropify" name="images[]" id="image" multiple="multiple">
                            </div>
                        </div>
                        <dir style="clear: both;"></dir>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info btn-default  b-a-0 waves-effect waves-light" id="add">Thêm</button>
                            <button type="button" class="btn btn-info btn-default  b-a-0 waves-effect waves-light" style="display: none;" id="update-event">Lưu</button>
                            <button type="button" class="btn btn-danger b-a-0 waves-effect waves-light" data-dismiss="modal">Đóng</button>
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

    $('.year').datetimepicker({
        format: 'YYYY-MM-DD',
        minDate: new Date()
    });

    $('#event-create').click(function(e) {

        $('#title').val("");
        $('#start-date').val("");
        $('#description').val("");
        $('#end-date').val("");
        $('input[name=status]').prop('checked', false);
    });

    $('#update-event').click(function(e) {
        $('#error-start').text("");
        $('#error-end').text("");
        $('#error-description').text("");
        $('#error-title').text("");
        $('#error-status').text("");
    });

    $('#add').click(function(e) {
        $('#error-start').text("");
        $('#error-end').text("");
        $('#error-description').text("");
        $('#error-title').text("");
        $('#error-status').text("");
    });

    $('#event-action').submit(function(evt) {

        var formData = new FormData(this);

        $.ajax({
            async: true,
            method: 'POST',
            url: '/event/store',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'JSON',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function() {
                alert('Thêm sự kiện thành công');
                window.location.reload(true);
            },
            error: function(data) {
                if(data.status === 422) {

                    var errors = data.responseJSON;

                    $('#error-start').text(errors['start_date']);
                    $('#error-end').text(errors['end_date']);
                    $('#error-description').text(errors['description']);
                    $('#error-title').text(errors['title']);
                    $('#error-status').text(errors['status']);
                }
            }
        });
        evt.preventDefault();
    });

</script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.btn-update').on('click', function(e) {
        var event_id = $(this).data('id');
        $('#update-event').removeAttr("style");
        $('#add').css("display","none");
        $('.form-image').css("display", "none");

        $.ajax({
            cache: false,
            method: 'GET',
            dataType: 'JSON',
            url: '/event/' + event_id,
            success: function(data){

                $('.modal-title').text('Thay đổi sự kiện');
                $('#id').val(data['id']);
                $('#title').val(data['title']);
                $('#description').val(data['description']);
                $('input[type=radio][name="status"][value='+data['status']+']').prop('checked', true);
                $('#start-date').val(data['start']);
                $('#end-date').val(data['end']);

            },
            error: function(data){
            }
        });
    });
    var url_event_update = '{{ route('event.update')}}';

    $('#update-event').on('click', function(e){

        var title = $('#title').val();
        var description = $('#description').val();
        var status = $('input[name=status]:checked').val();
        var start = $('#start-date').val();
        var end = $('#end-date').val();
        var id = $('#id').val();
        console.log(start);
        console.log(end);
        $.ajax({

            cache: false,
            method: 'PUT',
            dataType: 'JSON',
            url: url_event_update,
            data: {
                id: id,
                title: title,
                description: description,
                status: status,
                start: start,
                end: end
            },
            success: function() {
                alert('Thay đổi thông tin sự kiện thành công');
                window.location.reload(true);
            },
            error: function(data) {
                if(data.status === 422) {

                    var errors = data.responseJSON;

                    $('#error-start').text(errors['start']);
                    $('#error-end').text(errors['end']);
                    $('#error-description').text(errors['description']);
                    $('#error-title').text(errors['title']);
                    $('#error-status').text(errors['status']);
                }
            }
        });
        e.preventDefault();
    });
</script>
@endsection
