@extends('admin.index')

@section('content')
<div class="container">
    <form class="" type="hidden" method="POST" action="{{ route('supplier.save') }}">
        {{ csrf_field() }}
        <div class="row">
            <input type="text" name="name" id="" class="form-control" placeholder="name" required="true">
        </div>
        <div class="row">
            <input type="email" name="email" id="" class="form-control" placeholder="email">
        </div>
        <div class="row">
            <input type="text" name="password" id="" class="form-control" placeholder="password" required="">
        </div>
        <div class="row">
            <input type="phone" name="phone" id="" class="form-control" placeholder="phone number">
        </div>
        <div class="row">
            <button type="submit" value="submit" name="submit">SUBMIT</button>
        </div>
    </form>
</div>
@endsection
