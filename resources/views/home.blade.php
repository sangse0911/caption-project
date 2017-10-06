@extends('layouts.master')

@section('title')
    Shop account game hang dau viet nam
@endsection()

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/style.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/style1.css') }}" media="all" />
@endsection

@section('header')
    @include('particals.header')
@endsection()

@section('content')
    <div id="content" class="site-content" tabindex="-1">
        <div class="container">
            @include('particals.contents')
        </div>
    </div>
@endsection()

@section('footer')
    @include('particals.footer')
@endsection()
