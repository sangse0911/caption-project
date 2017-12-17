@extends('admin.master') 
@section('title') Trang Quản Trị | Danh Sách Khách Bán @endsection
@section('css') 
<link rel="stylesheet" href="{{ URL::to('AD/vendor/DataTables/css/dataTables.bootstrap4.min.css') }}" media="all" />
<link rel="stylesheet" href="{{ URL::to('AD/vendor/DataTables/Responsive/css/responsive.bootstrap4.min.css') }}" media="all" />
<link rel="stylesheet" href="{{ URL::to('AD/vendor/DataTables/Buttons/css/buttons.dataTables.min.css') }}" media="all" />
<link rel="stylesheet" href="{{ URL::to('AD/vendor/DataTables/Buttons/css/buttons.bootstrap4.min.css') }}" media="all" />


@endsection
@section('content') 
<div class="content-area py-1">
	<div class="container-fluid">
		<ol class="breadcrumb no-bg mb-1">
			<h4>Khách Hàng Bán Sách</h4>
			<li class="breadcrumb-item active">Khách Hàng</li>
			<li class="breadcrumb-item active">Khách Bán</li>
			<div style="float: right;"><a href="BOS_ThemQuanTri.html"><button type="button" class="btn btn-info btn-lg label-right b-a-0 waves-effect waves-light">
				<span class="btn-label"><i class="fa fa-user-plus"></i></span>
				Thêm Khách Hàng
			</button>
		</a></div>
		</ol>
		<div class="box box-block bg-white">
			<table class="table table-striped table-bordered dataTable" id="table-1">
				<thead>
					<tr>
						<th>ID</th>
						<th>Tên</th>
						<th>Số Điện Thoại</th>
						<th>Email</th>
						<th>Địa Chỉ</th>
						<th>Facebook</th>
						<th>Trạng Thái</th>

					</tr>
				</thead>
				<tbody>

					<tr>
						<td>Other browsers</td>
						<td>All others</td>
						<td>A</td>
						<td>B</td>
						<td>C</td>
						<td>D</td>
						<td>U</td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<th>ID</th>
						<th>Tên</th>
						<th>Số Điện Thoại</th>
						<th>Email</th>
						<th>Địa Chỉ</th>
						<th>Facebook</th>
						<th>Trạng Thái</th>
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
<script type="text/javascript" src="{{ URL::to('AD/vendor/DataTables/pdfmake/build/vfs_fonts.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('AD/vendor/DataTables/Buttons/js/buttons.html5.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('AD/vendor/DataTables/Buttons/js/buttons.print.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('AD/vendor/DataTables/Buttons/js/buttons.colVis.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('AD/neptune-default/js/tables-datatable.js') }}"></script>
@endsection