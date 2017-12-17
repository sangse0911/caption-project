@extends('layouts.app1')

@section('content')
<div class="container">
	<form class="" type="hidden" id=""  method="POST" action="{{ route('invoice.save') }}">
		{{ csrf_field() }}
		<input type="hidden" name="supplier-id" value="{{ \Request::segment(3) }}">

			<label class="radio-inline">
				<input type="radio" name="method" value="1">Cash
			</label>
			<label class="radio-inline">
				<input type="radio" name="method" value="2">Credit
			</label>


		<input type="text" name="credit" id="" value="" placeholder="bank account">

			<label class="radio-inline">
				<input type="radio" name="status" value="1">Sell
			</label>
			<label class="radio-inline">
				<input type="radio" name="status" value="2">For rent
			</label>


		 <div class="row">
	    	<button type="submit" name="" value="" class="btn btn-success">SUBMIT</button>
	    </div>
	</form>
</div>
@endsection
