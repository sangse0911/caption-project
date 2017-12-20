<div id="content" class="site-content" tabindex="-1">
    <div class="container">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                @yield('part-content')
                @yield('carousel')
                @yield('search')
                @yield('customer')
                @yield('event')
                @yield('categories')
                @yield('first')
                @yield('second')
                @yield('post-book')
                @yield('cart')

                {{-- @php
                    echo $books->render();
                @endphp --}}
                <form type="hidden" name="" id="post-form" method="POST">
                    <input type="hidden" name="token" value="{{ csrf_token() }}">
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Thông tin chi tiết của sách</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        @yield('single-book-field')
                                        @yield('post-book-field')

                                    </div>
                                </div>
                                <div style="clear: both;"></div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success btn-default  b-a-0 waves-effect waves-light" id="post-create">Lưu</button>
                                    <button type="button" class="btn btn-danger btn-default" data-dismiss="modal">Đóng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </main>
            <!-- #main -->
        </div>
        <!-- #primary -->
        @yield('sidebar')

    </div>
    <!-- .container -->
</div>
<!-- #content -->
