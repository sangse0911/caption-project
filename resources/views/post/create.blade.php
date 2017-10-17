@extends('layouts.master') @section('title') Shop account game hang dau viet nam @endsection() @section('styles')
<link rel="stylesheet" type="text/css" href="{{ URL::to('css/style.css') }}" media="all" />
<link rel="stylesheet" type="text/css" href="{{ URL::to('css/style1.css') }}" media="all" /> @endsection @section('header') @include('particals.header') @endsection() @section('content')
<div id="content" class="site-content" tabindex="-1">
    <div class="container">
        <div class="col-xs-12 col-lg-3">
        </div>
        <div class="col-xs-12 col-lg-9">
            <h1>aaaaaaaaaaaaaaaaaaaaaaaa</h1>
            <form form enctype="multipart/form-data" type="hidden" method="POST" action="{{ route('post.save') }}">
                {{ csrf_field() }}
                <input type="hidden" name="" value="{{ Auth::user()->id }}">
                <div class="row">
                    <label for="name">Ten sach </label>
                    <input type="text" name="name" class="form-control" id="name">
                </div>
                <div class="row">
                    <label for="introduce">Gioi thieu ve sach</label>
                    <input type="text" name="introduce" class="form-control" id="introduce">
                </div>
                <div class="row">
                    <div class="form-group">
                        <label for="comment">Mo ta ve sach</label>
                        <textarea class="" rows="9" id="comment" placeholder="" name="description"> The Bootstrap grid system has four classes: xs (phones), sm (tablets), md (desktops), and lg (larger desktops). The classes can be combined to create more dynamic and flexible layouts. Tip: Each class scales up, so if you wish to set the same widths for xs and sm, you only need to specify xs.</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-lg-2">
                        <label for="author">Tac gia</label>
                    </div>
                    <div class="col-xs-12 col-lg-10">
                        <input type="text" name="author" class="form-control" id="author">
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-xs-12 col-lg-2">
                        <label for="company">Nha xuat ban</label>
                    </div>
                    <div class="col-xs-12 col-lg-10">
                        <input type="text" name="publishing-company" class="form-control" id="company">
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-xs-12 col-lg-2">
                        <label for="year">Nam xuat ban</label>
                    </div>
                    <div class="col-xs-12 col-lg-10">
                        <input type="text" name="publishing-year" class="form-control" id="year">
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-xs-12 col-lg-2">
                        <label for="republish">Tai ban lan thu</label>
                    </div>
                    <div class="col-xs-12 col-lg-10">
                        <input type="text" name="republish" class="form-control" id="republish">
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-xs-12 col-lg-2">
                        <label for="ISBN">ISBN</label>
                    </div>
                    <div class="col-xs-12 col-lg-10">
                        <input type="text" name="isbn" class="form-control" id="ISBN">
                    </div>
                </div>
                <div class="row">

                    <label for="image">Gui anh cho chung toi</label>

                </div>
                <div class="row">
                    <input type="file" class="form-control" name="images[]" id="image" multiple="multiple">

                </div>
                <div class="row">
                    <div class="form-group">
                        <label for="law">Qui dinh cua chung toi</label>
                        <textarea class="" rows="9" id="law" placeholder="">  The Bootstrap grid system has four classes: xs (phones), sm (tablets), md (desktops), and lg (larger desktops). The classes can be combined to create more dynamic and flexible layouts. Tip: Each class scales up, so if you wish to set the same widths for xs and sm, you only need to specify xs.
                        </textarea>
                    </div>
                </div>
                <div class="row">
                    <label class="checkbox-inline">
                        <input type="checkbox" value=""><strong style="color: red;">Toi da doc ki va dong y voi thoa thuan cua ben cung cap</strong>
                    </label>
                </div><br/>
                <div class="row">
                    <button type="submit" name="" id="" style="display: block;width: 100%;" class="btn btn-success">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection() @section('footer') @include('particals.footer') @endsection() @section('scripts')

@endsection
