@extends('admin.master')
@section('title') Trang Quản Trị | Thêm Sách2 @endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ URL::to('css/admin/morris/morris.css') }}" media="all" />
<link rel="stylesheet" type="text/css" href="{{ URL::to('css/admin/jvectormap/jquery-jvectormap-2.0.3.css') }}" media="all" />
<link rel="stylesheet" type="text/css" href="{{ URL::to('css/admin/dropify/dist/css/dropify.min.css') }}" media="all" />
<link rel="stylesheet" type="text/css" href="{{ URL::to('css/admin/multiple-select.css') }}" media="all" />
@endsection

@section('content')
<div class="content-area py-1">
	<div class="content-area py-1">
		<div class="container-fluid">
			<h4>Thêm Sách Mới</h4>
			<ol class="breadcrumb no-bg mb-1">
				<li class="breadcrumb-item active">Sách</li>
				<li class="breadcrumb-item active">Thêm Sách</li>
			</ol>
			<div class="box box-block bg-white">
				 <input type="hidden" name="supplier-id" value="{{ \Request::segment(3) }}">
				<form form enctype="multipart/form-data" type="hidden" name="" id="" method="POST" action="{{ route('book.save') }}">
					{{ csrf_field() }}
					   <div class="form-group col-md-6">
                    <input type="hidden" class="form-control" name="admin-id" value="1">
                </div>
                <div class="form-group col-md-6">
                    <input type="hidden" class="form-control" name="bookself-id" value="1">
                </div>

					<div class="form-group col-md-6">
						<h6>Loại Sách</h6>
						<label class="custom-control custom-radio">
							<input id="radio1" name="status" value="0" type="radio" onclick="myFunctionST()" class="custom-control-input">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Sách Bán</span>
						</label>
						<label class="custom-control custom-radio">
							<input id="radio2" name="status" value="1" type="radio" onclick="myFunctionSB()" class="custom-control-input">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Sách Thuê</span>
						</label>
						<br>
					</div>

					<div class="form-group col-md-6">
						<h6>Tác Giả</h6>
						<input type="text" name="author" class="form-control" placeholder="Nhập Tên Tác Giả">
						<br>
					</div>
					<div class="form-group col-md-6" >
						<h6>Tên Sách</h6>
						<input type="text" name="name" class="form-control" id="name" placeholder="Nhập Tên Sách">
						<br>
					</div>

					<div class="form-group col-md-6">
						<h6>Nhà Xuất Bản</h6>
						<input type="text" name="publishing-company" class="form-control" id="company" placeholder="Nhập Tên Nhà Xuất Bản">
						<br>
					</div>
					<div class="form-group col-md-6">
						<h6>Thể Loại</h6>
						<select id="ms" multiple="multiple" name="categories[]" >
							<option value="1">19PRawpdU1W2</option>
							<option value="2">mFxfw7ns7BAi</option>
							<option value="3">64xPZLgBJB6p</option>
							<option value="4">pFgMwpGxqp4f</option>
							<option value="5">Q74vTBA3ZXGR</option>
							<option value="6">seaFte4MXSD8</option>
						</select>
					</div>
					<div class="form-group col-md-6">
						<h6>Năm Xuất Bản</h6>
						<input type="text" name="publishing-year" class="form-control" id="year" placeholder="Nhập Năm Xuất Bản">
						<br>
					</div>
					<div class="form-group col-md-6">
						<h6>Giá Bán</h6>
						<input type="text" name="price-sell" class="form-control form-control-success" id="price-sell">
						<br>
					</div>
					<div class="form-group col-md-6">
						<h6>ISBN</h6>
						<input type="text" name="isbn" class="form-control" id="ISBN">
						<br>
					</div>
					<div class="form-group col-md-6">
						<h6>Giá Thuê</h6>
						<input type="text" name="price-rent" class="form-control form-control-success" id="price-rent">
						<br>
					</div>
					<div class="form-group col-md-6">
						<h6>Tái Bản Lần Thứ</h6>
						<input type="text" name="republish" class="form-control" id="republish" placeholder="Nhập Năm Xuất Bản">
						<br>
					</div>
					<div class="form-group col-md-6">
						<h6>Chất Lượng Sách</h6>
						<select style="width: 100%">
							<option name="" value="">1</option>
							<option name="" value="">2</option>
							<option name="" value="">3</option>
							<option name="" value="">4</option>
						</select>
						<br>
					</div>
					<div class="form-group col-md-6" style="height: 50px;">
					</div>
					<div class="form-group col-md-6">
						<h6>Tóm Tắt</h6>
						<textarea class="ckeditor" rows="9" id="comment" name="introduce" rows="10" ></textarea>
						<br>
					</div>
					<div class="form-group col-md-6">
						<h6>Hình Ảnh</h6>
						<div class="row">
							<div class="col-md-6">
								<input type="file" id="input-file-now" class="dropify" name="images[]" />
							</div>
							<div class="col-md-6">
								<input type="file" id="input-file-now" class="dropify" name="images[]" />
							</div>
						</div>
						<div class="row" style="margin-top: 30px;">
							<div class="col-md-6">
								<input type="file" id="input-file-now" class="dropify" name="images[]" />
							</div>
							<div class="col-md-6">
								<input type="file" id="input-file-now" class="dropify" name="images[]" />
							</div>
						</div>
					</div>
					<div style="clear: both;"></div>
					<div style="text-align: center;">

						<button type="button" class="btn btn-success btn-rounded w-min-sm  waves-effect waves-light">Thêm</button>
						<button type="reset" class="btn btn-info btn-rounded w-min-sm  waves-effect waves-light">Làm Mới</button>
					</div>
				</form>

			</div>

		</div>

		<footer class="footer">
			<div class="container-fluid">
				<div class="row text-xs-center">
					<div class="col-sm-6 text-sm-left mb-0-5 mb-sm-0" style="text-align: center;">
						2017 © BOS Team
					</div>
				</div>
			</div>
		</footer>
	</div>
</div>
@endsection
@section('script')
<script>
	$(function() {
		$('#ms').change(function() {
			console.log($(this).val());
		}).multipleSelect({
			width: '100%'
		});
	});
</script>
<script>
function myFunctionST() {
    document.getElementById("price-rent").disabled = true;
    document.getElementById("price-sell").disabled = false;
}
</script>
<script>
function myFunctionSB() {
    document.getElementById("price-sell").disabled = true;
    document.getElementById("price-rent").disabled = false;
}
</script>

<script type="text/javascript" src="{{ URL::to('js/multiple-select.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('css/admin/dropify/dist/js/dropify.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('css/admin/flot/jquery.flot.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('css/admin/flot/jquery.flot.resize.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('css/admin/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('css/admin/CurvedLines/curvedLines.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('css/admin/TinyColor/tinycolor.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('css/admin/sparkline/jquery.sparkline.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('css/admin/raphael/raphael.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('css/admin/morris/morris.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('css/admin/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('css/admin/jvectormap/jquery-jvectormap-world-mill.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('css/admin/peity/jquery.peity.js') }}"></script>

<script type="text/javascript" src="{{ URL::to('js/admin/ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('js/admin/forms-upload.js') }}"></script>

@endsection
