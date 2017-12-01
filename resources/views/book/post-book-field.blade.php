<div class="form-group col-sm-6 post">
    <label for="introduce">Bạn muốn làm gì với sách</label><br/>
    <label class="radio-inline">
        <input type="radio" name="kind" value="0">Bán</label>
    <label class="radio-inline">
        <input type="radio" name="kind" value="1">Cho thuê</label>
    <label class="radio-inline">
        <input type="radio" name="kind" value="2">Cho mượn</label>
</div>

<div class="form-group col-sm-6 post">
    <label for="name">Địa chỉ của bạn</label>
    <input type="text" name="address" class="form-control" id="address" value="" placeholder="Địa chỉ nhà cung cấp">
</div>

<div class="form-group col-sm-6 post">
    <label for="name">Tên sách</label>
    <input type="hidden" name="id" value="" id="id">
    <input type="text" name="name" class="form-control" id="name" value="" placeholder="Tên sách">
</div>

<div class="form-group col-sm-6 post">
    <label for="introduce">Giới thiệu về sách</label>
    <input type="text" name="introduce" class="form-control" id="introduce" value="" placeholder="Giới thiệu về sách">
</div>


<div class="form-group col-sm-6 post">
    <label for="author">Tác gỉa</label>
    <input type="text" class="form-control" name="author" id="author" value="" placeholder="Tác gỉa">
</div>

<div class="form-group col-sm-6 post">
    <label for="publishing-company">Nhà xuất bản</label>
    <input type="text" class="form-control" name="company" id="company" value="" placeholder="Nhà xuất bản">
</div>
<div class="form-group col-sm-6 post">
    <label for="publishing-year">Năm xuất bản</label>
    <input type="text" class="form-control" name="year" id="year" value="" placeholder="Năm xuất bản">
</div>
<div class="form-group col-sm-6 post">
    <label for="republish">Tái bản lần thứ</label>
    <input type="text" class="form-control" name="republish" id="republish" value="" placeholder="Tái bản lần thứ">
</div>

<div class="form-group col-sm-12 post">
    <label for="description">Mô tả về sách</label>
    <textarea class=" form-control ckeditor" id="description" name="description" rows="10" placeholder="Mô tả về sách"></textarea>
</div>
<div class="form-group image-area post">
    <div class="col-md-6">
        <input type="file" id="input-file-now" class="dropify" name="images[]" />
    </div>
    <div class="col-md-6">
        <input type="file" id="input-file-now" class="dropify" name="images[]" />
    </div>
    <div class="col-md-6">
        <input type="file" id="input-file-now" class="dropify" name="images[]" />
    </div>
    <div class="col-md-6">
        <input type="file" id="input-file-now" class="dropify" name="images[]" />
    </div>
</div>
