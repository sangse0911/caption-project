@extends('admin.master')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/multiple-select.css') }}">

@endsection
@section('content')
<div class="container">
    <form form enctype="multipart/form-data" type="hidden" name="" id="" method="POST" action="{{ route('book.save') }}">
        {{ csrf_field() }}
        {{-- {{ dd($supplier) }} --}}
        <div class="row">
            <div class="col-md-6">
                <input type="hidden" name="supplier-id" value="{{ \Request::segment(3) }}">
                <div class="row">
                    <label class="radio-inline">
                        <input type="radio" name="method" value="1">Tien mat
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="method" value="2">The ngan hang
                    </label>
                </div>
                <div class="row">
                    <input type="text" name="credit" id="" value="" placeholder="bank account" class="form-control">
                </div>
                <div class="row">
                    <label class="radio-inline">
                        <input type="radio" name="status" value="0">Sach ban
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="status" value="1">Sach cho thue
                    </label>
                </div>
                <div class="row">
                    <p>terms of use</p>
                    <textarea class="form-control" rows="50" cols="100" id="" style="height: 300px; max-height: 300px;">If you have PHP installed locally and you would like to use PHP's built-in development server to serve your application, you may use the serve Artisan command. This command will start a development server at http://localhost:8000: php artisan serve Of course, more robust local development options are available via Homestead and Valet. Configuration Public Directory After installing Laravel, you should configure your web server's document / web root to be the public directory. The index.php in this directory serves as the front controller for all HTTP requests entering your application. Configuration Files All of the configuration files for the Laravel framework are stored in the config directory. Each option is documented, so feel free to look through the files and get familiar with the options available to you. Directory Permissions After installing Laravel, you may need to configure some permissions. Directories within the storage and the bootstrap/cache directories should be writable by your web server or Laravel will not run. If you are using the Homestead virtual machine, these permissions should already be set.
                    </textarea>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="" id=""><strong style="color: red;">I agree to the terms of service</strong>
                    </label>
                </div>
                <div class="row">
                    <input type="text" name="price-rent" class="form-control" value="" placeholder="price of rent">
                </div>
                <div class="row">
                    <input type="text" name="price-sell" class="form-control" value="" placeholder="price for sale">
                </div>
                <div class="row">
                    <input type="text" name="price-entered" class="form-control" value="" placeholder="price entered">
                </div>
                <div class="row">
                    <input type="text" name="quality" class="form-control" value="" placeholder="quality of book">
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">

                        <label>Category sach</label>
                            {{-- <option value="">Chon category sach</option> --}}
                        <select id="ms" multiple="multiple" name="categories[]" style="width: 100% !important">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                        </select>

                </div>
                <div class="row">
                    <input type="hidden" class="form-control" name="admin-id" value="{{ $authId }}">
                </div>
                <div class="row">
                    <input type="hidden" class="form-control" name="bookself-id" value="{{ $bookself->id }}">
                </div>
                <div class="row">
                    <input type="text" class="form-control" name="name" value="" placeholder="book name">
                </div>
                <div class="row">
                    <input type="text" class="form-control" name="introduce" value="" placeholder="introduce">
                </div>
                <div class="row">
                </div>
                <div class="row">
                    <textarea rows="9" cols="50" class="form-control" placeholder="description" name="description" style="height: 250px; max-height: 250px"></textarea>
                </div>
                <div class="row">
                    <input type="file" class="form-control" name="images[]" id="image" multiple="multiple">
                </div>
                <div class="row">
                    <input type="text" class="form-control" name="author" value="" placeholder="author">
                </div>
                <div class="row">
                    <input type="text" class="form-control" name="publishing-company" value="" placeholder="the publishing-company">
                </div>
                {{--
                <div class='col-md-6'>
                    <input type='text' class="form-control" name="publishing-year" class="form-control" id='datetimepicker4' />
                </div> --}}
                <div class="row">
                    <input type="text" name="publishing-year" value="" placeholder="publishing-year" class="form-control">
                </div>
                <div class="row">
                    <input type="number" class="form-control" name="republish" value="" placeholder="republish">
                </div>
                <div class="row">
                    <input type="text" class="form-control" name="isbn" value="" placeholder="isbn">
                </div>

            </div>
        </div>
        <div class="row">
            <button id="" class="btn btn-success" type="submit" style="display: block;width: 100%;">SUBMIT</button>
        </div>
    </form>
</div>
@endsection

@section('script')

<script src="{{ asset('js/multiple-select.js')}}"></script>
{{-- <script src="{{ asset('js/moment.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-datetimepicker.js') }}"></script> --}}
{{--
<script type="text/javascript">
$(function() {
    $('#datetimepicker4').datetimepicker();
});
</script>
--}}
<script>
       $(function() {
        $('#ms').change(function() {
            // console.log($(this).val());
        }).multipleSelect({
            // width: '100%'
        });
    });
    </script>
@endsection
