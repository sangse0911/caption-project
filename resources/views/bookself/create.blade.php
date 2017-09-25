@extends('layouts.app')

@section('content')
<div class="container">
	<form class="" type="hidden" id=""  method="POST" action="{{ route('bookself.save') }}">
		{{ csrf_field() }}
		<input type="hidden" name="" value="{{ $authId }}">
	    <dir class="row">
	    	<input type="text" name="location" id="" placeholder="location">

	    </dir>
	    <div class="row">
	    	<button type="submit" name="" value="" class="btn btn-success">SUBMIT</button>
	    </div>
	</form>
</div>
@endsection
