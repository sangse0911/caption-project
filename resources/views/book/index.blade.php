@extends('layouts.master')

@section('title')
    Shop account game hang dau viet nam
@endsection()

@section('header-v2')
    @include('particals.header-v2')
@endsection()

@section('nav-v2')
	@include('particals.nav-bar-v2')
@endsection

@section('content')
	 <div id="content" class="site-content" tabindex="-1">
        <div class="container">
           <nav class="woocommerce-breadcrumb">
				<a href="home.html">Home</a>
				<span class="delimiter"><i class="fa fa-angle-right"></i></span>
				<a href="product-category.html">Accessories</a>
				<span class="delimiter"><i class="fa fa-angle-right"></i></span>
				<a href="product-category.html">Headphones</a>
				<span class="delimiter"><i class="fa fa-angle-right"></i>
				</span>Ultra Wireless S50 Headphones S50 with Bluetooth
			</nav>
			<div id="primary" class="content-area">
				<main id="main" class="site-main">
					<table border="1" class="table table-hover table-striper">
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Image</th>
							<th>Action</th>
						</tr>
						@foreach($books as $book)
						<tr>
							@foreach($book->images as $image)

							<td>{{ $book->id }}</td>
							<td>{{ $book->name }}</td>
							<td><img src="{{ URL::to('assets/images/product') .'/'. $image->path}}"></td>

							@endforeach
						</tr>
						@endforeach
					</table>
				</main>
			</div>
        </div>
    </div>
@endsection
