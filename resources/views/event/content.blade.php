
<div class="content-area py-1">
    <div class="container-fluid">
        <ol class="breadcrumb no-bg mb-1">
            <div style="float: right;">
                <button type="button" class="btn btn-info btn-lg label-right b-a-0 waves-effect waves-light" data-toggle="modal" data-target="#myModal" id="event-create">
                    <span class="btn-label"><i class="fa fa-user-plus"></i></span> Thêm su kien
                </button>
            </div>
        </ol>
        {{-- <form enctype="multipart/form-data" type="hidden" name="" id="" method="POST">
            {{ csrf_field() }}
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog modal-lg">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Them moi su kien</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="event-name">Ten su kien</label>
                                <input type="hidden" name="event-id" value="" id="event-id">
                                <input type="text" name="event-name" class="form-control" id="event-name" value="" placeholder="Ten su kien">
                                <br/>
                            </div>
                            <div class="form-group">
                                <label for="event-detail">Chi tiet su kien</label>
                                <textarea class="form-control" name="event-detail" id="event-detail" rows="10" value="" placeholder="Chi tiet su kien"></textarea>
                            </div>
                            <label class="radio-inline">
                                <input type="radio" name="event-status" value="1">San sang</label>
                            <label class="radio-inline">
                                <input type="radio" name="event-status" value="0">Khong san sang</label>
                            <div class="form-group">
                                <input type="file" class="form-control" name="images[]" id="image" multiple="multiple">
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
        </form> --}}
        <div class="box box-block bg-white">
            <table class="table table-striped table-bordered dataTable" id="table-1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Mo ta</th>
                        <th>Trạng Thái</th>
                        <th>Hanh dong</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($events as $event)
                    <tr>
                        <td>{{ $event->id }}</td>
                        <td>{{ $event->title }}</td>
                        <td>{{ $event->description }}</td>
                        <td>{{ $event->status }}</td>
                        <td>
                            <button type="button" class="btn btn-info btn-default  btn-update b-a-0 waves-effect waves-light"
                            id="update-{{ $event->id }}" data-toggle="modal" data-target="#myModal">Sua</button>
                            <button type="button" class="btn btn-info btn-default  btn-delete b-a-0 waves-effect waves-light"
                            id="delete-{{ $event->id }}">Xoa</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
