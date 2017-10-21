@extends('admin.master') 
@section('title') Trang Quản Trị | Thêm Quản Trị Viên @endsection
@section('css') 
<link rel="stylesheet" href="{{ URL::to('AD/vendor/DataTables/css/dataTables.bootstrap4.min.css') }}" media="all" />
<link rel="stylesheet" href="{{ URL::to('AD/vendor/DataTables/Responsive/css/responsive.bootstrap4.min.css') }}" media="all" />
<link rel="stylesheet" href="{{ URL::to('AD/vendor/DataTables/Buttons/css/buttons.dataTables.min.css') }}" media="all" />
<link rel="stylesheet" href="{{ URL::to('AD/vendor/DataTables/Buttons/css/buttons.bootstrap4.min.css') }}" media="all" />
@endsection
@section('content') 
<div class="content-area py-1">
	<div class="container-fluid">
		<h4>Quản trị viên</h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item active">Quản Trị Viên</li>
			<li class="breadcrumb-item active">Thêm Quản Trị Viên Mới</li>
			
		</ol>


		<div class="box box-block bg-white">
			<div class="row">
				<div class="col-lg-12">
					<div class="ibox float-e-margins">
						<div class="ibox-content">

							<div class="table-responsive">

								<form action="admin/admincoso/them" method="POST">
									<input type="hidden" name="_token" value="m5RkrkWyOVRNHf0kCeU5fgpS6jASRwXXXaDU8noq" />
									<div class="form-group">
										<label style="font-weight: bold;">Tên quản trị viên:</label>
										<input class="form-control" name="name" placeholder="Nhập tên quản trị viên" />
									</div>

									<div class="form-group">
										<label style="font-weight: bold;">Email: </label>
										<input class="form-control" name="email" placeholder="Nhập email" />
									</div>
									<div class="form-group">
										<label style="font-weight: bold;">Mật khẩu: </label>
										<input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu" />
									</div>
									<div class="form-group">
										<label style="font-weight: bold;">Nhập lại mật khẩu: </label>
										<input type="password" class="form-control" name="passwordAgain" placeholder="Nhập lại mật khẩu" />
									</div>
									<button type="button" class="btn btn-success btn-rounded w-min-sm mb-0-25 waves-effect waves-light">Thêm</button>
									<button type="button" class="btn btn-info btn-rounded w-min-sm mb-0-25 waves-effect waves-light">Làm Mới</button>

								</div>

							</div>
						</div>
					</div>
				</div>

			</div>

		</div>
	</div>
	<!-- Footer -->
</div>
@endsection
@section('script')
<script type="text/javascript" src="{{ URL::to('AD/neptune-default/js/tables-datatable.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('AD/vendor/DataTables/js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('AD/vendor/DataTables/js/dataTables.bootstrap4.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('AD/vendor/DataTables/Responsive/js/dataTables.responsive.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('AD/vendor/DataTables/Responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('AD/vendor/DataTables/Buttons/js/dataTables.buttons.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('AD/vendor/DataTables/Buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('AD/vendor/DataTables/JSZip/jszip.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('AD/vendor/DataTables/pdfmake/build/pdfmake.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('AD/vendor/DataTables/pdfmake/build/vfs_fonts.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('AD/vendor/DataTables/Buttons/js/buttons.html5.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('AD/vendor/DataTables/Buttons/js/buttons.print.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('AD/vendor/DataTables/Buttons/js/buttons.colVis.min.js') }}"></script>
@endsection