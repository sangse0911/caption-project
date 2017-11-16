@extends('admin.master') @section('content')
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Them moi su kien</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="event-name">Ten su kien</label>
                    <input type="text" name="event-name" class="form-control" id="event-name" placeholder="Ten su kien">
                    <br/>
                </div>
                <div class="form-group">
                    <label for="event-description">Mo ta su kien</label>
                    <input type="text" name="event-description" id="event-description" class="form-control" placeholder="Mo ta su kien">
                    <br/>
                </div>
                <div class="form-group">
                    <label for="event-detail">Chi tiet su kien</label>
                    <textarea class="form-control" name="event-detail" id="event-detail" rows="10" placeholder="Chi tiet su kien">
                    </textarea>
                </div>
                <label class="radio-inline">
                    <input type="radio" name="optradio" value="1">San sang</label>
                <label class="radio-inline">
                    <input type="radio" name="optradio" value="0">Khong san sang</label>
                <div class="form-group">
                	<input type="file" class="form-control" name="images[]" id="image" multiple="multiple">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default">Them</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Dong</button>
            </div>
        </div>
    </div>
</div>
@endsection
