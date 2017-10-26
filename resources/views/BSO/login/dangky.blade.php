@extends('BSO.master') 
@section('title') BSO | Tủ Sách Tương Lai @endsection
@section('css')
@endsection
@section('content') 
@section('body')<body class="page home page-template-default">@endsection
      <div id="content" class="site-content" tabindex="-1">
	<div class="container">

		<nav class="woocommerce-breadcrumb" >
			<a href="home.html">Trang Chủ</a>
			<span class="delimiter"><i class="fa fa-angle-right"></i></span>
			Đăng Ký
		</nav><!-- .woocommerce-breadcrumb -->

		<div id="primary" class="content-area">
			<main id="main" class="site-main">
				<article id="post-8" class="hentry">

					<div class="entry-content">
						<div class="woocommerce">
							<div class="customer-login-form">
								<span class="or-text">or</span>

								<div class="col2-set" style="border:1px solid gray;background-color: #EEF9FC;" id="customer_login">

									<div class="col-1">


										<h2>Đăng Ký</h2>

										<form method="post" class="login">

											<p class="before-login-text">
												* Thông tin bắt buộc
											</p>

											<p class="form-row form-row-wide">
												<label for="username">Email
												<span class="required">*</span></label>
												<input type="text" class="input-text" name="username" id="username" value="" />
											</p>
                                            <p class="form-row form-row-wide">
                                                <label for="username">Tên
                                                <span class="required">*</span></label>
                                                <input type="text" class="input-text" name="username" id="username" value="" />
                                            </p>
											<p class="form-row form-row-wide">
												<label for="password">Mật Khẩu
												<span class="required">*</span></label>
												<input class="input-text" type="password" name="password" id="password" />
											</p>
                                            <p class="form-row form-row-wide">
                                                <label for="password">Nhập Lại Mật Khẩu
                                                <span class="required">*</span></label>
                                                <input class="input-text" type="password" name="password" id="password" />
                                            </p>
                                            <!-- <p class="lost_password">
                                                <a href="login-and-register.html">Quên mật khẩu?</a>
                                            </p> -->
                                            <label for="rememberme" class="inline">
                                                    <input name="rememberme" type="checkbox" id="rememberme" value="forever" /> Tôi đã đọc & đồng ý với <a href="">Điều khoản sử dụng của Tủ Sách Tương Lai.</a>
                                                </label>
											<p class="form-row">
												<input class="button" type="submit" value="Đăng Ký" name="login">
                                                
												
											</p>
                                    
										</form>


									</div><!-- .col-1 -->

									<div class="col-2" style="margin-top: 320px;">
										
                                           <button style="padding: 3px;background-color: white;" type="button" class="btn btn-info">&nbsp &nbsp <i class="fa fa-facebook-official fa-3x" style="color: #4267b2;"></i>  <span style="font-size: 35px; color: #4267b2;">Sign up with Facebook</span>&nbsp &nbsp  </button>

									</div><!-- .col-2 -->

								</div><!-- .col2-set -->

							</div><!-- /.customer-login-form -->
						</div><!-- .woocommerce -->
					</div><!-- .entry-content -->

				</article><!-- #post-## -->

			</main><!-- #main -->
		</div><!-- #primary -->


	</div><!-- .col-full -->
</div><!-- #content -->
@endsection
@section('script')
@endsection