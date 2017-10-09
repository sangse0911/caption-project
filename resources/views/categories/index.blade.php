@extends('admin.master')

@section('content')
<div class="container">
    <table class="table table-hover table-striper">

        @foreach($categories as $category)
            <td>{{ $category->name }}</td>
        @endforeach

    </table>

</div>
@endsection
