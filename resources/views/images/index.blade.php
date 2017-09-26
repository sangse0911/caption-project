@extends('layouts.app1')

@section('content')
<div class="container">
    <div class="row">
        @foreach($images as $image)
            <td>{{ $image->path }}</td>
        @endforeach
    </div>
</div>
@endsection
