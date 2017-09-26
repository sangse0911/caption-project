@extends('layouts.app1')

@section('content')

<div class="container">
    <div class="row">
        <form enctype="multipart/form-data" type="hidden" class="" method="POST" action="{{ route('images.store') }}">
            {{ csrf_field() }}
            <input type="file" class="images" name="images" id="images" multiple="multiple"></input>
            <input type="submit" data-value="Place order" value="tao moi" class="button alt">
        </form>
    </div>
</div>
@endsection
