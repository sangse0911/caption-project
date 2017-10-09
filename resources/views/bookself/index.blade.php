@extends('admin.master')

@section('content')
<div class="container">
    @foreach($bookselfs  as $bookself)
    	<tr>
	    	<td>{{ $bookself->id }}</td>
	    	<td>{{ $bookself->location }}</td>
	        <td>{{ $bookself->status }}</td>
    	</tr>
    @endforeach
</div>
@endsection
