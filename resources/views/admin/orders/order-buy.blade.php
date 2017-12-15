@extends('admin.master')
@section('title') Trang Quản Trị | Đơn Hàng Bán @endsection
@section('css')

@endsection
@section('content')
<div class="content-area py-1">
    <div class="container-fluid">
    	 <div class="box box-block bg-white">
            <table class="table table-striped table-bordered dataTable" id="table-1">
                <thead>
                    <tr>
                    	<th>OrderId</th>
                        <th>BookId</th>
                        <th>Tên sách</th>
                        <th>Tác gỉa</th>
                        <th>Năm xuất bản</th>
                        <th>Xuất bản lần thứ</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                	{{-- {{ dd($orders[0]->books->get(0)->id)}} --}}
                    @foreach($orders as $order)
                    @foreach($order->books as $book)
                    <tr>
                    	<td>{{ $order->id }}</td>
                        <td>{{ $book->id }}</td>
                        <td>{{ $book->name }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->year }}</td>
                        <td>{{ $book->republish }}</td>
                        <td align="center">
                            <button id="{{ $book->id }}" data-id="{{ $book->id }}" type="button" class="btn btn-warning btn-view btn-sm label-left b-a-0 waves-effect waves-light" data-toggle="modal" data-target="#myModal">
                                <span class="btn-label"><i class="fa fa-eye" ></i></span> Xem
                            </button>
                            &nbsp
                            <button type="button" id="update-{{ $book->id }}" data-id="{{ $book->id }}" class="btn btn-success btn-sm btn-update label-left b-a-0 waves-effect waves-light" data-toggle="modal" data-target="#myModal">
                                <span class="btn-label"><i class="fa fa-edit"></i></span> Sửa
                            </button>
                            &nbsp
                            <button id="view-{{ $book->id }}" type="button" class="btn btn-danger btn-sm label-left b-a-0 waves-effect waves-light">
                                <span class="btn-label"><i class="fa fa-trash-o  fa-fw"></i></span> Xóa
                            </button>
                        </td>
                    </tr>
                    @endforeach @endforeach
                </tbody>
            </table>
        </div>
	</div>
</div>
@endsection
