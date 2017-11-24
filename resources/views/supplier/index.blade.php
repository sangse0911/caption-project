@extends('admin.master') @section('content')
<div class="content-area py-1">
    <div class="container-fluid">
        <ol class="breadcrumb no-bg mb-1">
            <div style="float: right;">
            </div>
        </ol>
        <form enctype="multipart/form-data" type="hidden" name="" id="ahihi" method="POST">
            <input type="hidden" name="token" value="{{ csrf_token() }}">
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog modal-lg" style="max-width: 1100px;">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"></h4>
                            <input type="hidden" name="id" id="id">
                        </div>
                        <div class="modal-body">
                            <div class="form-group col-md-6 supplier">
                                <h6>Loại Sách</h6>
                                <label class="custom-control custom-radio" id="sell">
                                    <input id="radio1" name="status" value="0" type="radio" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Sách Bán</span>
                                </label>
                                <label class="custom-control custom-radio" id="rent">
                                    <input id="radio2" name="status" value="1" type="radio" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Sách Thuê</span>
                                </label>

                            </div>
                         	<div class="form-group col-md-6 supplier">
                                <h6>Thanh toan bang</h6>
                                <label class="custom-control custom-radio">
                                    <input id="radio1" name="method" value="0" type="radio" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Tien mat</span>
                                </label>
                                <label class="custom-control custom-radio">
                                    <input id="radio2" name="method" value="1" type="radio" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">The ngan hang</span>
                                </label>

                            </div>
                            <div class="form-group col-md-6 supplier">
                                <h6>Tai khoan ngan hang</h6>
                                <input type="text" name="account" id="account" class="form-control" placeholder="Tai khoan ngan hang">
                            </div>
                            <div class="form-group col-md-6 supplier">
                                <h6>Tác Giả</h6>
                                <input type="text" name="author" id="author" class="form-control" placeholder="Nhập Tên Tác Giả">

                            </div>
                             <div class="form-group col-md-6 supplier">
                                <h6>Gioi thieu qua ve sach</h6>
                                <input type="text" name="introduce" id="introduce" class="form-control" placeholder="Gioi thieu ve sach">

                            </div>
                            <div class="form-group col-md-6 supplier">
                                <h6>Tên Sách</h6>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nhập Tên Sách">

                            </div>
                            <div class="form-group col-md-6 supplier">
                                <h6>Nhà Xuất Bản</h6>
                                <input type="text" name="company" class="form-control" id="company" placeholder="Nhập Tên Nhà Xuất Bản">

                            </div>
                            <div class="form-group col-md-6 supplier">
                                <h6>Thể Loại</h6>
                                <select id="category" multiple="multiple" name="categories[]" class="category" style="width: 100%;">
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6 supplier">
                                <h6>Năm Xuất Bản</h6>
                                <input type="text" name="year" class="form-control" id="year" placeholder="Nhập Năm Xuất Bản">

                            </div>
                            <div class="form-group col-md-6 supplier">
                                <h6>Giá Bán</h6>
                                <input type="text" name="price-sell" class="form-control form-control-success" id="price-sell">

                            </div>
                            <div class="form-group col-md-6 supplier">
                                <h6>ISBN</h6>
                                <input type="text" name="isbn" class="form-control" id="isbn" placeholder="Ma so sach">

                            </div>
                            <div class="form-group col-md-6 supplier" id="rent-area">
                                <h6>Giá Thuê</h6>
                                <input type="text" name="price-rent" class="form-control form-control-success" id="price-rent">

                            </div>
                            <div class="form-group col-md-6 supplier">
                                <h6>Tái Bản Lần Thứ</h6>
                                <input type="text" name="republish" class="form-control" id="republish" placeholder="Tai ban lan thu">

                            </div>
                            <div class="form-group col-md-6 supplier">
                                <h6>Vi tri cua sach</h6>
                                <select id="location" multiple="multiple" name="location[]" class="location" style="width: 100%;">
                                    @foreach($bookshelves as $bookshelf)
                                    <option name="" value="{{ $bookshelf->id }}">{{ $bookshelf->location }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6 supplier">
                                <h6>Chất Lượng Sách</h6>
                                <select id="quality" multiple="multiple" name="quality[]" class="quality" style="width: 100%;">
                                    <option name="" value="1">25% den 50%</option>
                                    <option name="" value="2">51% den 65%</option>
                                    <option name="" value="3">66% den 75%</option>
                                    <option name="" value="4">76% den 90%</option>
                                </select>

                            </div>
                            <div class="form-group col-md-6 supplier">
                                <h6>Tóm Tắt</h6>
                                <textarea class="ckeditor" rows="9" id="description" name="description" rows="10"></textarea>
                            </div>
                            <div class="form-group col-md-6 supplier">
                                <h6>Hình Ảnh</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="file" id="" class="dropify" name="images[]"/>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="file" id="" class="dropify" name="images[]"/>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 30px;">
                                    <div class="col-md-6">
                                        <input type="file" id="" class="dropify" name="images[]"/>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="file" id="" class="dropify" name="images[]"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="clear: both;"></div>
                        <div class="box box-block bg-white" id="box-hide">
                            <table class="table table-striped table-bordered dataTable" id="table-1">
                                <thead>
                                    <tr>
                                        <th>Ma so hop dong</th>
                                        <th>Tai khoan ngan hang</th>
                                        <th>Phone</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td id="contract-id"></td>
                                        <td id="supplier-account"></td>
                                        <td id="supplier-phone"></td>

                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info btn-default b-a-0 waves-effect waves-light" id="book-create"">Them moi</button>
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
                        <th>Ten</th>
                        <th>Phone</th>
                        <th>Hanh dong</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($suppliers as $supplier)
                    <tr>
                        <td>{{ $supplier->id }}</td>
                        <td>{{ $supplier->user->name }}</td>
                        <td>{{ $supplier->phone }}</td>
                        <td align="center">
                            <button type="button" id="view-{{ $supplier->id }}" class="btn btn-warning btn-sm btn-view label-left b-a-0 waves-effect waves-light" data-toggle="modal" data-target="#myModal">
                                <span class="btn-label"><i class="fa fa-eye"></i></span> Xem
                            </button>
                            &nbsp
                            <button id="supplier-{{ $supplier->id }}" type="button" class="btn btn-success btn-sm btn-sell label-left b-a-0 waves-effect waves-light" data-toggle="modal" data-target="#myModal">
                                <span class="btn-label"><i class="fa fa-user-plus  fa-fw"></i></span> Khach ban
                            </button>
                            <button id="supplier-{{ $supplier->id }}" type="button" class="btn btn-success btn-sm btn-rent label-left b-a-0 waves-effect waves-light" data-toggle="modal" data-target="#myModal">
                                <span class="btn-label"><i class="fa fa-user-plus  fa-fw"></i></span> Khach cho thue
                            </button>
                            <button id="delete-{{ $supplier->id }}" type="button" class="btn btn-danger btn-sm label-left b-a-0 waves-effect waves-light">
                                <span class="btn-label"><i class="fa fa-trash-o  fa-fw"></i></span> Xóa
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
	$("#category").select2({ closeOnSelect: false });
	$("#location").select2({ closeOnSelect: true, maximumSelectionLength: 1 });
	$("#quality").select2({ closeOnSelect: true, maximumSelectionLength: 1 });
	$('#year').datetimepicker({
        viewMode: 'years',
        format: 'YYYY'
    });

	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});
    $('.btn-view').click(function(e) {
        $('.modal-title').text('Thong tin chi tiet nha cung cap');
        $('.supplier').css("display","none");
        $('#box-hide').removeAttr("style");

        var supplier_id = e.currentTarget.id.substring(5);

        $.ajax({
            cache: false,
            method: 'GET',
            dataType: 'JSON',
            url: '/supplier/detail/' + supplier_id,
            success: function(data) {
                console.log(data);
                if(data['details'].length == 0) {
                    $('#contract-id').text("");
                    $('#supplier-account').text("");
                    $('#supplier-phone').text(data['supplier']['phone']);
                }else{

                    for(var i=0; i< (data['details'].length); i++) {

                        $('#contract-id').text(data['contracts'][i]['id']);
                        $('#supplier-account').text(data['contracts'][i]['account']);
                        $('#supplier-phone').text(data['supplier']['phone']);
                    };
                }
            },
            error: function(data) {
                console.log('ee', data);
            }
        });
        e.preventDefault();
    });
	$('.btn-sell').click(function(e) {
        $('.supplier').removeAttr("style");
        $('#box-hide').css("display", "none");

	    var supplier_id = e.currentTarget.id.substring(9);

	    $.ajax({
	        cache: false,
	        method: 'GET',
	        dataType: 'JSON',
	        url: '/suppliers/' + supplier_id,
	        success: function(data) {
	            $('.modal-title').text('Them moi nha cung cap');
	            $('#id').val(data['id']);
	            $('#rent').css("display", "none");
	            $('#rent-area').css("display", "none");
	            $('#radio1').prop("checked", true);
	        },
	        error: function(data) {
	            console.log('ee', data);
	        }
	    });
	    e.preventDefault();
	});
	$('#ahihi').submit(function(evt) {

        var formData = new FormData(this);

        $.ajax({
        	async:true,
	        method: 'POST',
	        url: '/book/store',
	        data:formData,
	        cache:false,
	        contentType: false,
	        processData: false,
	        dataType: 'JSON',
	        headers: {
			    'X-CSRF-TOKEN': $('meta[name="token"]').attr('content')
			},
	        success: function(data) {
	            window.location.assign('/admin/books');
	        },
	        error: function(data) {
	            console.log(data);
        	}
        });
         evt.preventDefault();
    });

</script>
@endsection
