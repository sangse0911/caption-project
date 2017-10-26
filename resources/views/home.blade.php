@extends('layouts.master')

@section('title')
    Cua hang sach hang dau
@endsection()

@section('header-v2')
    @include('particals.header-v2')
@endsection()

@section('nav-v2')
	@include('particals.nav-bar-v2')
@endsection

@section('content')
        @include('particals.carousel')
        @include('particals.contents')

@endsection
{{-- @section('content')
    <div id="content" class="site-content" tabindex="-1">
        <div class="container">
            @include('particals.contents')
        </div>
    </div> --}}
{{-- @endsection() --}}

@section('footer')
    @include('particals.footer')
@endsection()
