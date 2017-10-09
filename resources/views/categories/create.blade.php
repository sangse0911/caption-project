@extends('admin.master')

@section('content')
<div class="container">
	<form type="hidden" name="" id="" method="POST" action="{{ route('category.save') }}">
		{{ csrf_field() }}
	    <div class="row">
	      	<input type="text" name="name" id="" value="" placeholder="category name" class="form-control">
	    </div>
	    <div class="row">
	    	<button type="submit" name="" id="" value="" class="btn btn-success">SUBMIT</button>
	    </div>
	</form>
</div>
@endsection
