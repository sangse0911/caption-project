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
        <form enctype="multipart/form-data" type="hidden" name="" id="add-user" method="POST">
            {{-- {{ csrf_field() }} --}}
            <input type="hidden" name="token" id="token" value="{{ csrf_token() }}">
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog modal-lg">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Thêm mới người dùng</h4>
                        </div>
                        <div class="modal-body">
                            <div class="box box-block bg-white" id="box-hide">
                            <table class="table table-striped table-bordered ">
                                <thead>
                                    <tr>
                                        <th>Mã số hợp đồng</th>
                                        <th>Tài khoản ngân hàng</th>
                                        <th>Id nhà cung cấp</th>
                                        <th>Loại hợp đồng</th>
                                        <th>Phưong thức trả tiền</th>
                                    </tr>
                                </thead>
                                <tbody id="contracts">

                                </tbody>
                            </table>
                        </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-default" data-dismiss="modal">Đóng</button>
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
                        <th>Email</th>
                        <th>Trạng Thái</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>

                        <td>
                            <?php

switch ($user->status) {
    case (2):
        echo 'Cấm';
        break;
    case (3):
        echo "Cảnh cáo";
        break;
    default:
        echo 'Bình thường';
        break;
}
?>
                        </td>
                        <td align="center">
                            <button type="button" id="view" class="btn btn-warning btn-sm btn-view label-left b-a-0 waves-effect waves-light" data-toggle="modal" data-target="#myModal" data-id="{{ $user->id }}">
                                <span class="btn-label"><i class="fa fa-eye"></i></span> Xem
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
    $('.btn-view').click(function(e) {
        $('.modal-title').text('Thông tin chi tiết nhà cung cấp');
        $('.supplier').css("display", "none");
        $('#box-hide').removeAttr("style");

        var id = $(this).data('id');

        $.ajax({
            cache: false,
            method: 'GET',
            dataType: 'JSON',
            url: '/supplier/' + id,
            success: function(data) {
                if (data.length == 0) {
                    $('#contract-id').text("");
                    $('#supplier-account').text("");
                } else {
                    var contracts = $('#contracts');
                    for (var i = 0; i < (data.length); i++) {
                        var row = document.createElement('tr');
                        var contractId = document.createElement('td');
                        contractId.innerHTML = data[i]['id'];
                        var account = document.createElement('td');
                        account.innerHTML = data[i]['account'];
                        var userId = document.createElement('td');
                        userId.innerHTML = data[i]['id'];
                        var kind = document.createElement('td');
                        kind.innerHTML = data[i]['kind'];
                        var method = document.createElement('td');
                        method.innerHTML = data[i]['method'];

                        $(row).append(contractId, account, userId, kind, method);
                        contracts.append(row);
                    };
                }
            },
            error: function(data) {
            }
        });
    });

</script>
@endsection