@extends('BSO.master2') 
@section('title') BSO | Tủ Sách Tương Lai @endsection
@section('css')
@endsection
@section('content') 
@section('body')<body class="page home page-template-default">@endsection
<div tabindex="-1" class="site-content" id="content">
    <div class="container">

        <nav class="woocommerce-breadcrumb"><a href="home.html">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>Góc Sách</nav>
        <div class="content-area" id="primary">
            <main class="site-main" id="main">
                <article class="page type-page status-publish hentry">
                    <div itemprop="mainContentOfPage" class="entry-content">
                        <div id="yith-wcwl-messages"></div>
                        <form class="woocommerce" method="post" id="yith-wcwl-form">

                            <input type="hidden" value="68bc4ab99c" name="yith_wcwl_form_nonce" id="yith_wcwl_form_nonce"><input type="hidden" value="/electro/wishlist/" name="_wp_http_referer">
                            <!-- TITLE -->
                            <div class="wishlist-title ">
                                <h2>Đăng Bài</h2>
                            </div>

                            <div class="baidang">
                                <form>
                                    <div class="row">
                                        <div class="col-sm-6 ok" ><span class="sizec">
                                            <i class="fa fa-book" aria-hidden="true"></i> &nbsp Thông Tin Sách
                                        </span>
                                      <hr>
                                        <h5>Tên Sách</h5>
                                        <input class="txtform" type="text" name="tensach">
                                        <h5>Tác Giả</h5>
                                        <input class="txtform" type="text" name="tacgia">
                                        <h5>Nhà Sản Xuất</h5>
                                        <input class="txtform" type="text" name="tacgia">
                                        <h5>Năm Sản Xuất</h5>
                                        <input class="txtform" type="text" name="tacgia">
                                        <h5>Tái Bản Lần Thứ</h5>
                                        <input class="txtform" type="text" name="tacgia">
                                        <h5>Giới Thiệu Về Sách</h5>
                                        <input type="text" name="introduce" class="txtform" id="introduce">

                                        <h5>Thông Tin Chi Tiết</h5>
                                        <textarea class="" rows="5" id="comment" class="txtform" placeholder="" name="description"> The Bootstrap grid system has four classes: xs (phones), sm (tablets), md (desktops), and lg (larger desktops). The classes can be combined to create more dynamic and flexible layouts. Tip: Each class scales up, so if you wish to set the same widths for xs and sm, you only need to specify xs.</textarea>
                                        <br>
                                        <br>
                                        <h5>ISBN</h5>
                                        <input class="txtform" type="text" name="tacgia">
                                        <h5>Hình Ảnh (tối thiểu 4 hình)</h5>
                                        <input type="file" class="txtform" name="images[]" id="image" multiple="multiple">
                                         <label for="rememberme" class="inline">
                                                    <input name="rememberme" type="checkbox" id="rememberme" value="forever" /> Tôi đã đọc & đồng ý với <a href="">Điều khoản sử dụng của Tủ Sách Tương Lai.</a>
                                                </label>
                                        <button type="button" class="btn btn-success btn-rounded w-min-sm mb-0-25 waves-effect waves-light">Đăng Bài</button>
                                        <button type="button" class="btn btn-info btn-rounded w-min-sm mb-0-25 waves-effect waves-light">Làm Mới</button>
                                    </div>
                                    <div class="col-sm-6" >
                                        <span class="sizec">
                                           <i class="fa fa-user" aria-hidden="true"></i> &nbspThông Tin Cá Nhân
                                        </span>
                                        <hr>
                                        <h5>Tên </h5>
                                        <input class="txtform" type="text" name="tensach">
                                        <h5>Số Điện Thoại</h5>
                                        <input class="txtform" type="text" name="tacgia">
                                        <h5>Email</h5>
                                        <input class="txtform" type="text" name="tacgia">
                                        <h5>Địa Chỉ</h5>
                                        <textarea class="" rows="3" id="comment" class="txtform" placeholder="Nhập địa chỉ" name="description"> </textarea>

                                    </div>




                                </form>
                            </div>

                        </form>

                    </div><!-- .entry-content -->

                </article><!-- #post-## -->

            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .col-full -->
</div>
@endsection
@section('script')
@endsection