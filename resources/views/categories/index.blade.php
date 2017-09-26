@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($categories as $category)
            <td>{{ $category->name }}</td>
        @endforeach
    </div>
</div>
@endsection
