@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($images as $image)
            <td>{{ $image->path }}</td>
        @endforeach
    </div>
</div>
@endsection
