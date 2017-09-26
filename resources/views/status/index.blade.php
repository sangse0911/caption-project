@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($status as $status)
            <td>{{ $status->name }}</td>
        @endforeach
    </div>
</div>
@endsection
