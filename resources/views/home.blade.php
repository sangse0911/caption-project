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
    @section('carousel')

        @include('particals.carousel')
    @endsection
    @section('categories')
        @include('particals.categories')
    @endsection
    @section('first')
        @include('particals.first-page')
    @endsection
    @section('best-sell')
        @include('particals.best-sell')
    @endsection
    @section('event')
        @include('particals.event')
    @endsection
    @section('single-book-field')
        @include('book.single-book')
    @endsection
    @section('post-book-field')
        @include('book.post-book-field')
    @endsection

    @include('particals.contents')
@endsection


@section('footer')
    @include('particals.footer')
@endsection()
