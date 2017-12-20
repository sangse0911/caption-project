<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Title -->
    <title>BSO | Đăng Nhập Quản Trị</title>
    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/admin/bootstrap.min.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/admin/themify-icons/themify-icons.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/admin/font-awesome.min.css') }}" media="all" />
    <!-- Neptune CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/core.css') }}" media="all" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>

<body class="img-cover" style="background-image: url('{{ URL::to('/img/loginimg.jpg') }}');">
    <div style="text-align: center;">
        <div class="mb-2"><img src="{{ URL::to('/img/logologin.png') }}" style="height: 150px;width: 150px;" title=""></div>
        <h5>Xin mời bạn đăng nhập để vào trang quản trị!</h5>
        <br>
    </div>
      @if (count($errors)>0||session('thongbao'))
<div class="alert alert-danger" style="text-align: center;width: 480px;margin: auto;">
       @foreach ($errors->all() as $err)
        {{$err}}<br>
       @endforeach
        {{session('thongbao')}}
</div>
<br>
@endif

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <form class="form-horizontal" method="POST" action="{{ route('admin.login') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="input-group">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                            <div class="input-group-addon"><i class="ti-email"></i></div>
                        </div>
                {{--         @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span> @endif --}}
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="input-group">
                            <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Mật Khẩu">
                            <div class="input-group-addon"><i class="ti-key"></i></div>
                        </div>
                       {{--  @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span> @endif --}}
                    </div>
                    <div class="form-group clearfix">
                        <div class="float-xs-left">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" name="remember" class="custom-control-input" {{ old( 'remember') ? 'checked' : '' }}>
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description font-90">Remember me</span>
                            </label>
                        </div>
                        <div class="float-xs-right">
                            <a class="text-white font-90" href="{{ route('password.request') }}">Quên Mật Khẩu?</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-danger btn-block">Đăng Nhập</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Vendor JS -->
    <script type="text/javascript" src="{{ URL::to('js/admin/jquery-1.12.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/admin/tether.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/admin/bootstrap.min.js') }}"></script>
</body>

</html>
