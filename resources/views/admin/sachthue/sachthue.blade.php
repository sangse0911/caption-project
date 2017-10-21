@extends('admin.master') 
@section('title') Trang Quản Trị | Danh Sách Sách Thuê @endsection
@section('css') 
<link rel="stylesheet" href="{{ URL::to('AD/vendor/DataTables/css/dataTables.bootstrap4.min.css') }}" media="all" />
<link rel="stylesheet" href="{{ URL::to('AD/vendor/DataTables/Responsive/css/responsive.bootstrap4.min.css') }}" media="all" />
<link rel="stylesheet" href="{{ URL::to('AD/vendor/DataTables/Buttons/css/buttons.dataTables.min.css') }}" media="all" />
<link rel="stylesheet" href="{{ URL::to('AD/vendor/DataTables/Buttons/css/buttons.bootstrap4.min.css') }}" media="all" />
@endsection
@section('content') 
<div class="content-area py-1">
				<div class="container-fluid">
					<h4>Danh Sách</h4>
					<ol class="breadcrumb no-bg mb-1">
						<li class="breadcrumb-item active">Sách</li>
						<li class="breadcrumb-item active">Danh Sách</li>
					</ol>
					<div class="box box-block bg-white">
						<table class="table table-striped table-bordered dataTable" id="table-1">
							<thead>
								<tr>
									<th>ID</th>
									<th>Tên Sách</th>
									<th>Tác Giả</th>
									<th>Nhà Xuất Bản</th>
									<th>Ngày Phát Hành</th>
									<th>Tóm Tắt</th>
									<th>Mô Tả Chi Tiết</th>
									<th width="30px" >Sửa</th>
									<th width="30px;">Xóa</th>

								</tr>
							</thead>
							<tbody>
								
								<tr>
									<td>Other browsers</td>
									<td>All others</td>
									<td>-</td>
									<td></td>
									<td>-</td>
									<td>U</td>
									<td>-</td>
									<td align="center"><button type="button" class="btn btn-success btn-sm label-left b-a-0 waves-effect waves-light">
										<span class="btn-label"><i class="fa fa-edit"></i></span>
										Sửa
									</button></td>
									<td><button type="button" class="btn btn-danger btn-sm label-left b-a-0 waves-effect waves-light">
										<span class="btn-label"><i class="fa fa-trash-o  fa-fw"></i></span>
										Xóa
									</button></td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<th>ID</th>
									<th>Tên Sách</th>
									<th>Tác Giả</th>
									<th>Nhà Xuất Bản</th>
									<th>Ngày Phát Hành</th>
									<th>Tóm Tắt</th>
									<th>Mô Tả Chi Tiết</th>
									<th>Sửa</th>
									<th>Xóa</th>
								</tr>
							</tfoot>
						</table>
					</div>

				</div>
			</div>
@endsection
@section('script')
<script type="text/javascript" src="{{ URL::to('AD/vendor/DataTables/js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('AD/vendor/DataTables/js/dataTables.bootstrap4.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('AD/vendor/DataTables/Responsive/js/dataTables.responsive.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('AD/vendor/DataTables/Responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('AD/vendor/DataTables/Buttons/js/dataTables.buttons.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('AD/vendor/DataTables/Buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('AD/vendor/DataTables/JSZip/jszip.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('AD/vendor/DataTables/pdfmake/build/pdfmake.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('AD/vendor/DataTables/pdfmake/build/vfs_fonts.js') }}"></script> x
<script type="text/javascript" src="{{ URL::to('AD/vendor/DataTables/Buttons/js/buttons.html5.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('AD/vendor/DataTables/Buttons/js/buttons.print.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('AD/vendor/DataTables/Buttons/js/buttons.colVis.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('AD/neptune-default/js/tables-datatable.js') }}"></script>
@endsection