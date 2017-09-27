@extends('layouts.app1')

@section('content')
<div class="container">
    <div class="row">
   		<select id="dropdownId" name="supplier" class="form-control">
   			<option value="">Selection</option>
       		@foreach($suppliers as $supplier)
       			<option id="supplier-id" value="{{ $supplier->id }}">{{ $supplier->phone }}</option>
       		@endforeach
   		</select>
   		<div id="debug"></div>
   		<a href="#" id="" value="" type="button">Create new Invoice</a>
    </div>
</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
{{-- <script>
	$(function() {
		$("#dropdownId").on("change", function() {
			$("#debug").text($("#dropdownId").val());
		}).trigger("change");
	});
</script>
 --}}
