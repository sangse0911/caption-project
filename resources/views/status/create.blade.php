@extends('layouts.app1')

@section('content')
<div class="container">
	<form type="hidden" name="" id="" method="POST" action="{{ route('status.save') }}">
		{{ csrf_field() }}
	    <div class="row">
	      	<input type="text" name="name" id="" value="" placeholder="status" class="form-control">
	    </div>
	    <div class="row">
	    	<button type="submit" name="" id="" value="" class="btn btn-success">SUBMIT</button>
	    </div>
	</form>
</div>
@endsection
