@extends('admin.master') @section('content')
<div class="content-area py-1">
    <div class="content-area py-1">
        <div class="container-fluid">
            <h4>Thêm Sách Mới</h4>
            <ol class="breadcrumb no-bg mb-1">
                <li class="breadcrumb-item active">Sách</li>
                <li class="breadcrumb-item active">Thêm Sách</li>
            </ol>
            <div class="box box-block bg-white">
                <form form enctype="multipart/form-data" type="hidden" name="" id="" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group col-md-6">
                        <h6>Loại Sách</h6>
                        <label class="custom-control custom-radio">
                            <input id="radio1" name="status" value="0" type="radio" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">Sách Bán</span>
                        </label>
                        <label class="custom-control custom-radio">
                            <input id="radio2" name="status" value="1" type="radio" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">Sách Thuê</span>
                        </label>
                        <br>
                    </div>
                    <div class="form-group col-md-6">
                        <h6>Tai khoan ngan hang</h6>
                        <input type="text" name="account" id="account" class="form-control" placeholder="Tai khoan ngan hang">
                    </div>
                    <div class="form-group col-md-6">
                        <h6>Tác Giả</h6>
                        <input type="text" name="author" id="author" class="form-control" placeholder="Nhập Tên Tác Giả">
                        <br>
                    </div>
                    <div class="form-group col-md-6">
                        <h6>Tên Sách</h6>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Nhập Tên Sách">
                        <br>
                    </div>
                    <div class="form-group col-md-6">
                        <h6>Nhà Xuất Bản</h6>
                        <input type="text" name="company" class="form-control" id="company" placeholder="Nhập Tên Nhà Xuất Bản">
                        <br>
                    </div>
                    <div class="form-group col-md-6">
                        <h6>Thể Loại</h6>
                        <select id="category" multiple="multiple" name="categories[]" class="category" style="width: 100%;">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <h6>Năm Xuất Bản</h6>
                        <input type="text" name="year" class="form-control" id="year" placeholder="Nhập Năm Xuất Bản">
                        <br>
                    </div>
                    <div class="form-group col-md-6">
                        <h6>Giá Bán</h6>
                        <input type="text" name="price-sell" class="form-control form-control-success" id="price-sell">
                        <br>
                    </div>
                    <div class="form-group col-md-6">
                        <h6>ISBN</h6>
                        <input type="text" name="isbn" class="form-control" id="isbn" placeholder="Ma so sach">
                        <br>
                    </div>
                    <div class="form-group col-md-6">
                        <h6>Giá Thuê</h6>
                        <input type="text" name="price-rent" class="form-control form-control-success" id="price-rent">
                        <br>
                    </div>
                    <div class="form-group col-md-6">
                        <h6>Tái Bản Lần Thứ</h6>
                        <input type="text" name="republish" class="form-control" id="republish" placeholder="Tai ban lan thu">
                        <br>
                    </div>
                     <div class="form-group col-md-6">
                        <h6>Vi tri cua sach</h6>
                        <select id="location" multiple="multiple" name="location[]" class="location" style="width: 100%;">
                            @foreach($bookshelves as $bookshelf)
                            <option name="" value="{{ $bookshelf->id }}">{{ $bookshelf->location }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <h6>Chất Lượng Sách</h6>
                        <select id="quality" multiple="multiple" name="quality[]" class="quality" style="width: 100%;">
                            <option name="" value="1">25% den 50%</option>
                            <option name="" value="2">51% den 65%</option>
                            <option name="" value="3">66% den 75%</option>
                            <option name="" value="4">76% den 90%</option>
                        </select>
                        <br>
                    </div>
                    <div class="form-group col-md-6">
                        <h6>Tóm Tắt</h6>
                        <textarea class="ckeditor" rows="9" id="comment" name="introduce" rows="10"></textarea>
                        <br>
                    </div>
                    <div class="form-group col-md-6">
                        <h6>Hình Ảnh</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="file" id="" class="dropify" name="images[]" />
                            </div>
                            <div class="col-md-6">
                                <input type="file" id="" class="dropify" name="images[]" />
                            </div>
                        </div>
                        <div class="row" style="margin-top: 30px;">
                            <div class="col-md-6">
                                <input type="file" id="" class="dropify" name="images[]" />
                            </div>
                            <div class="col-md-6">
                                <input type="file" id="" class="dropify" name="images[]" />
                            </div>
                        </div>
                    </div>
                    <div style="clear: both;"></div>
                    <div style="text-align: center;">
                        <button type="button" class="btn btn-success btn-rounded w-min-sm  waves-effect waves-light" id="book-create">Thêm</button>
                        <button type="reset" class="btn btn-info btn-rounded w-min-sm  waves-effect waves-light">Làm Mới</button>
                    </div>
                </form>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <div class="row text-xs-center">
                    <div class="col-sm-6 text-sm-left mb-0-5 mb-sm-0" style="text-align: center;">
                        2017 © BSO Team
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
@endsection @section('script')
<script>
    $("#category").select2({ closeOnSelect: false });
    $("#location").select2({ closeOnSelect: true , maximumSelectionLength: 1});
    $("#quality").select2({ closeOnSelect: true , maximumSelectionLength: 1});

</script>

<script type="text/javascript">

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#book-create').on('click', function(e) {

        var name = $('#name').val();
        var status =  $('input[name=status]:checked').val();
        var account = $('#account').val();
        var author = $('#author').val();
        var company = $('#company').val();
        var introduce = $('#introduce').val();
        var description = $('#description').val();
        var bookshelf_id = $('#location').select2().val();
        var year = $('#year').val();
        var republish = $('#republish').val();
        var isbn = $('#isbn').val();
        var images = $('.dropify').val();
        var price_sell = data['price-sell'].val();
        var price_rent = 0;
        $.ajax({

            cache: false,
            method: 'POST',
            dataType: 'JSON',
            url: '/book/store',
            data: {
                name: name,
                status: status,
                account: account,
                author: author,
                company: company,
                introduce: introduce,
                description: description,
                bookshelf_id: bookshelf_id,
                year: year,
                republish: republish,
                isbn: isbn,
                images: images,
                price_sell: price_sell,
                price_rent: price_rent
            },
            success: function(data) {
                console.log('ss', data);
                // window.location.reload(true);
            },
            error: function(data) {
                console.log('ee', data);
            }
        });

        e.preventDefault();
    });
</script>
@endsection
