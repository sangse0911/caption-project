@extends('layouts.app')

@section('title')
    danh sach book
@endsection
@section('content')
<main>

    <div class="row">
        <span style="text-align: center;">Danh sach so sach ma chung toi cung cap</span>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <ul>
                @foreach($books as $book)
                <li>{{ $book->name }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</main>
@endsection
