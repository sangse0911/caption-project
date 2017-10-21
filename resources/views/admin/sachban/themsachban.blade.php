@extends('admin.master') 
@section('title') Trang Quản Trị | Thêm Sách @endsection
@section('css') 
	<link rel="stylesheet" type="text/css" href="{{ URL::to('AD/vendor/morris/morris.css') }}" media="all" />
	<link rel="stylesheet" type="text/css" href="{{ URL::to('AD/vendor/jvectormap/jquery-jvectormap-2.0.3.css') }}" media="all" />
	<link rel="stylesheet" type="text/css" href="{{ URL::to('AD/vendor/dropify/dist/css/dropify.min.css') }}" media="all" />
	
@endsection

@section('content')
<div class="content-area py-1">
	<div class="container-fluid">
		<h4>Thêm Sách Mới</h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item active">Sách</li>
			<li class="breadcrumb-item active">Thêm Sách</li>
		</ol>
		<div class="box box-block bg-white">

			<form>
				<div class="form-group">
					<h6>Tên Sách</h6>
					<input type="text" name="" class="form-control" id="name" placeholder="Nhập Tên Sách">
					<br>
				</div>
				<div class="form-group">
					<h6>Tác Giả</h6>
					<input type="text" name="" class="form-control" id="author" placeholder="Nhập Tên Tác Giả">
					<br>
				</div>
				<div class="form-group">
					<h6>Nhà Xuất Bản</h6>
					<input type="text" name="" class="form-control" id="company" placeholder="Nhập Tên Nhà Xuất Bản">
					<br>
				</div>
				<div class="form-group">
					<h6>Năm Xuất Bản</h6>
					<input type="text" name="" class="form-control" id="year" placeholder="Nhập Năm Xuất Bản">
					<br>
				</div>
				<div class="form-group">
					<h6>Tái Bản Lần Thứ</h6>
					<input type="text" name="" class="form-control" id="republish" placeholder="Nhập Năm Xuất Bản">
					<br>
				</div>
				<div class="form-group">
					<h6>Tóm Tắt</h6>
					<textarea class="form-control" id="introduce" rows="3"></textarea>
					<br>
				</div>
				<div class="form-group">
					<h6>Thông Tin Chi Tiết</h6>
					<textarea class="ckeditor" rows="9" id="comment" rows="3"></textarea>
					<br>
				</div>

				<div class="form-group">
					<h6>ISBN</h6>
					<input type="text" name="" class="form-control" id="ISBN">
					<br>
				</div>
				<div class="form-group">
					<h6>Giá Tiền Thuê Theo Ngày</h6>
					<input type="text" name="" class="form-control form-control-success" id="price">
					<br>
				</div>


							<!-- <div class="row">
								<div class="col-md-3">
									<input type="file" id="input-file-now" class="dropify" />
								</div>
								<div class="col-md-3">
									<input type="file" id="input-file-now" class="dropify" />
								</div>
								<div class="col-md-3">
									<input type="file" id="input-file-now" class="dropify" />
								</div>
								<div class="col-md-3">
									<input type="file" id="input-file-now" class="dropify" />
								</div>
							</div> -->

						</div>
						<button type="button" class="btn btn-success btn-rounded w-min-sm mb-0-25 waves-effect waves-light">Thêm</button>
						<button type="button" class="btn btn-info btn-rounded w-min-sm mb-0-25 waves-effect waves-light">Làm Mới</button>
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
</div>
@endsection
@section('script')
<script type="text/javascript" src="{{ URL::to('AD/vendor/dropify/dist/js/dropify.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('AD/vendor/flot/jquery.flot.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('AD/vendor/flot/jquery.flot.resize.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('AD/vendor/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('AD/vendor/CurvedLines/curvedLines.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('AD/vendor/TinyColor/tinycolor.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('AD/vendor/sparkline/jquery.sparkline.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('AD/vendor/raphael/raphael.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('AD/vendor/morris/morris.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('AD/vendor/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('AD/vendor/jvectormap/jquery-jvectormap-world-mill.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('AD/vendor/peity/jquery.peity.js') }}"></script>

<script type="text/javascript" src="{{ URL::to('AD/neptune-default/js/ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('AD/neptune-default/js/forms-upload.js') }}"></script>

@endsection