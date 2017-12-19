@extends('layouts.master')

@section('title')

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
    @section('event')
        @include('particals.event')
    @endsection

    @section('search')
        @include('particals.search')
    @endsection
    @section('first')
        @include('particals.first-page')
    @endsection
    @section('second')
        @include('particals.second-page')
    @endsection

    @section('single-book-field')
        @include('book.single-book')
    @endsection
    @section('post-book-field')
        @include('book.post-book-field')
    @endsection

    @section('post-book')
        @include('book.post_book')
    @endsection

    @section('recently')
        @include('particals.recently')
    @endsection

    @section('sidebar')
        @include('particals.sidebar')
    @endsection
    @include('particals.contents')
@endsection


@section('footer')
    @include('particals.footer')
@endsection()
