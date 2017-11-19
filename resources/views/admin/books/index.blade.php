@extends('admin.master')

@section('content')
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
                            <h4 class="modal-title">Them moi nguoi dung</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name">Ten nguoi dung</label>
                                <input type="hidden" name="id" value="" id="id">
                                <input type="text" name="name" class="form-control" id="name" value="" placeholder="Ten nguoi dung">

                            </div>
                             <div class="form-group">
                                <label for="email">Email nguoi dung</label>
                                <input type="email" name="email" class="form-control" id="email" value="" placeholder="Email nguoi dung">

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
                        <td>
                            <button type="button" class="btn btn-info btn-default  btn-update "
                            id="update-{{ $book->id }}" data-toggle="modal" data-target="#myModal">Sua</button>
                            <button type="button" class="btn btn-info btn-default  btn-delete "
                            id="delete-{{ $book->id }}">Xoa</button>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
