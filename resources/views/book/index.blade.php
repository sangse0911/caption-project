@extends('admin.master')

@section('content')
<main>

    <div class="row">
        <span style="text-align: center;">Danh sach so sach ma chung toi cung cap</span>
    </div>
    <table class="table-striper table table-hover">
        @foreach($books as $book)
            <td>{{ $book->name }}</td>
        @endforeach

    </table>

</main>
@endsection
