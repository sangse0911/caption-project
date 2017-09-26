@extends('layouts.app1')

@section('content')
<div class="container">
	<form form enctype="multipart/form-data" type="hidden" name="" id="" method="POST" action="{{ route('book.save') }}">
		{{ csrf_field() }}
   		<div class="row">
   			@foreach($categories as $category)
	   			<label class="checkbox-inline">
      				<input type="checkbox" name="categories[]" value="{{ $category->id }}">{{ $category->name }}
    			</label>
			@endforeach
   		</div>
   		<div class="row">
   			<input type="text" class="form-control" name="admin-id" value="{{ $authId }}">
   		</div>
   		<div class="row">
   			<input type="text" class="form-control" name="bookself-id" value="{{ $bookself->id }}">
   		</div>
   		<div class="row">
   			<input type="text" class="form-control" name="name" value="" placeholder="book name">
   		</div>
   		<div class="row">
   			<input type="text" class="form-control" name="introduce" value="" placeholder="introduce">
   		</div>
   		<div class="row">

   		</div>
   		<div class="row">
	   		<textarea rows="9" cols="50" class="form-control" placeholder="description" name="description">

	   		</textarea>
   		</div>
   		<div class="row">

   			<input type="file" class="form-control" name="images[]" id="image" multiple="multiple">
   		</div>

   		<div class="row">
   			<input type="text" class="form-control" name="author" value="" placeholder="author">
   		</div>
   		<div class="row">
   			<input type="text" class="form-control" name="publishing-company" value="" placeholder="the publishing-company">
   		</div>

    	{{-- <div class='col-md-6'>
        	<input type='text' class="form-control" name="publishing-year" class="form-control" id='datetimepicker4' />
    	</div> --}}
    	<div class="row">
    		<input type="text" name="publishing-year" value="" placeholder="publishing-year" class="form-control">
    	</div>
   		<div class="row">
   			<input type="number" class="form-control" name="republish" value="" placeholder="republish">
   		</div>
   		<div class="row">
   			<input type="text" class="form-control" name="isbn" value="" placeholder="isbn">
   		</div>
   		<div class="row">
   			<button id="" class="btn btn-success" type="submit">SUBMIT</button>
   		</div>
	</form>
</div>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{ asset('js/moment.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-datetimepicker.js') }}"></script>
{{-- <script type="text/javascript">
    $(function () {
        $('#datetimepicker4').datetimepicker();
    });
</script>
 --}}
