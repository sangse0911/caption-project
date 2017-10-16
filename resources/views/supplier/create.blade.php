@extends('admin.master')

@section('content')
<div class="container">
	<form class="" type="hidden" id="" method="POST" action="{{ route('supplier.save.exist') }}">
		{{ csrf_field() }}
		<select id="" class="form-control" name="user-id">
			<option value="">Selection</option>
			@foreach($users as $user)
				<option value="{{ $user->id }}">{{ $user->name }}</option>
			@endforeach
		</select>
		<input type="phone" name="phone" id="" class="form-control" placeholder="phone number">
		<button class="btn btn-success" id="" value="">SUBMIT</button>
	</form>
</div>
@endsection
