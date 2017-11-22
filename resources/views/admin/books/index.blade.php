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
                            <h4 class="modal-title">Chinh sua sach</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group col-sm-6">
                                <label for="name">Ten sach</label>
                                <input type="hidden" name="id" value="" id="id">
                                <input type="text" name="name" class="form-control" id="name" value="" placeholder="Ten sach">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="categories">The loai sach</label>
                                <select id="category" multiple="multiple" name="categories[]" class="category" style="width: 100%;">
                                	@foreach($categories as $category)
                                    <option value="{{ $category->id }}" >{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="introduce">Gioi thieu ve sach</label>
                                <input type="text" name="introduce" class="form-control" id="introduce" value="" placeholder="Gioi thieu ve sach">
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="bookshelf-id">Vi tri cua sach</label>
                                <input type="text" class="form-control" name="bookshelf-id" id="bookshelf-id" value="" placeholder="Vi tri cua sach">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="price">Gia cua sach</label>
                                <input type="number" class="form-control" name="price" id="price" value="" placeholder="Gia cua sach">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="author">Tac gia</label>
                                <input type="text" class="form-control" name="author" id="author" value="" placeholder="Tac gia">
                            </div>
                            <label class="radio-inline">
                                <input type="radio" name="status" value="0">Khong san sang</label>
                            <label class="radio-inline">
                                <input type="radio" name="status" value="1">San sang</label>
                            <label class="radio-inline">
                                <input type="radio" name="status" value="2">Dang </label>
                            <label class="radio-inline">
                                <input type="radio" name="status" value="3">Da ban</label>
                            <label class="radio-inline">
                                <input type="radio" name="status" value="4">Da cho thue</label>
                            <label class="radio-inline">
                                <input type="radio" name="status" value="5">Da tra lai</label>
                             <div class="form-group">
                                <label for="description">Mo ta ve sach</label>
                                <textarea class=" form-control ckeditor" id="description" name="description" rows="10" placeholder="Mo ta ve sach"></textarea>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="publishing-company">Nha xuat ban</label>
                                <input type="text" class="form-control" name="publishing-company" id="publishing-company" value="" placeholder="Nha xuat ban">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="publishing-year">Nam xuat ban</label>
                                <input type="text" class="form-control" name="publishing-year" id="publishing-year" value="" placeholder="Nam xuat ban">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="republish">Tai ban lan</label>
                                <input type="number" class="form-control" name="republish" id="republish" value="" placeholder="Tai ban lan thu">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="ISBN">Ma so sach</label>
                                <input type="text" class="form-control" name="ISBN" id="ISBN" value="" placeholder="ISBN">
                            </div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <input type="file" id="input-file-now" class="dropify" name="images[]" />
                                </div>
                                <div class="col-md-6">
                                    <input type="file" id="input-file-now" class="dropify" name="images[]" />
                                </div>
                                <div class="col-md-6">
                                    <input type="file" id="input-file-now" class="dropify" name="images[]" />
                                </div>
                                <div class="col-md-6">
                                    <input type="file" id="input-file-now" class="dropify" name="images[]" />
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success btn-default  b-a-0 waves-effect waves-light" id="update">Luu</button>
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
                        <th>Gioi thieu</th>
                        <th>Mo ta</th>
                        <th>Tac gia</th>
                        <th>Nam xuat ban</th>
                        <th>Xuat ban lan thu</th>
                        <th>Hanh dong</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $book)
                    <tr>
                        <td>{{ $book->id }}</td>
                        <td>{{ $book->name }}</td>
                        <td>{{ $book->introduce }}</td>
                        <td>{{ $book->description }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->publishing_year }}</td>
                        <td>{{ $book->republish }}</td>
                        <td align="center">
                            <button id="{{ $book->id }}" type="button" class="btn btn-warning btn-sm label-left b-a-0 waves-effect waves-light">
                            <span class="btn-label"><i class="fa fa-eye" ></i></span>
                            Xem
                        </button>
                        &nbsp
                        <button type="button" id="update-{{ $book->id }}" class="btn btn-success btn-sm btn-update label-left b-a-0 waves-effect waves-light" data-toggle="modal" data-target="#myModal">
                            <span class="btn-label"><i class="fa fa-edit"></i></span>
                            Sửa
                        </button>
                        &nbsp
                        <button id="view-{{ $book->id }}" type="button" class="btn btn-danger btn-sm label-left b-a-0 waves-effect waves-light">
                            <span class="btn-label"><i class="fa fa-trash-o  fa-fw"></i></span>
                            Xóa
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
   $("#category").select2({closeOnSelect:false});
</script>
<script>

</script>
<script>

 	$(document).on('focus', 'input' , function() {
        $(this).removeAttr('placeholder');
    });
	 $('.btn-update').on('click', function(e) {
    	var book_id = e.currentTarget.id.substring(7);

    	$.ajax({
    		cache: false,
    		method: 'GET',
    		dataType: 'JSON',
    		url: '/admin/books/' + book_id,
    		success: function(data){
    			console.log(data);
    			$('.modal-title').text('Cap nhat sach');
    			$('#name').val(data['book']['name']);
                $('#category').val(data['categories']['category_id']).trigger('change');
    			$('#description').val(CKEDITOR.instances.description.setData(data['book']['description']));
    			$('#introduce').val(data['book']['introduce']);
    			$('#bookshelf-id').val(data['book']['bookself_id']);
    			$('#price').val(data['book']['price']);
    			$('#author').val(data['book']['author']);
    			$('input[type=radio][name="status"][value='+data['book']['status']+']').prop('checked', true);
    			$('#publishing-company').val(data['book']['publishing_company']);
    			$('#publishing-year').val(data['book']['publishing_year']);
    			$('#republish').val(data['book']['republish']);
    			$('#ISBN').val(data['book']['isbn']);
    		},
    		error: function(data){
    			console.log('ee', data);
    		}
    	});
    });
</script>
@endsection
