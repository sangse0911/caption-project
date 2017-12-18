<div id="sidebar" class="sidebar" role="complementary" style="margin-top: 550px;">
    <aside id="electro_product_categories_widget-2" class="widget woocommerce widget_product_categories electro_widget_product_categories">
        <ul class="product-categories category-single">
            <li class="product_cat">
                <ul>
                    <li class="cat-item cat-item-172 current-cat-parent current-cat-ancestor">
                        <a href="javascript:void(0)"><span class="child-indicator open"><i class="fa fa-angle-up"></i></span>Danh sách thể loại sách</a>
                        {{-- <span class="count">()</span> --}}
                        <ul class="children" style="display: block;">
                           @foreach($categories as $category)
                            <li class="cat-item cat-item-228">
                                <a href="javascript:void(0)" class="category-show" data-id="{{ $category->id }}"><span class="no-child"></span>{{ $category->name }}</a>
                                <span class="count">({{ $category->books()->count() }})</span>
                            </li>
                           @endforeach
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
    <aside class="widget widget_text">
        <div class="textwidget">
            <a href="javascript:void(0)">
                <img src="{{ URL::to('assets/images/banner/banner1.jpg') }}" id="borderimg2" alt="Banner">
            </a>
        </div>
    </aside>
    <aside class="widget widget_text">
        <div class="textwidget">
            <a href="javascript:void(0)">
                <img src="{{ URL::to('assets/images/banner/banner2.jpg') }}" id="borderimg2" alt="Banner">
            </a>
        </div>
    </aside>

    @yield('recently')
    <aside id="electro_features_block_widget-2" class="widget widget_electro_features_block_widget">
        <div class="features-list columns-1">
            <div class="feature">
                <div class="media">
                    <div class="media-left media-middle feature-icon">
                        <i class="ec ec-transport"></i>
                    </div>
                    <div class="media-body media-middle feature-text">
                        <strong>Miễn phí vận chuyển</strong> từ 500000 VNĐ
                    </div>
                </div>
            </div>
            <div class="feature">
                <div class="media">
                    <div class="media-left media-middle feature-icon">
                        <i class="ec ec-returning"></i>
                    </div>
                    <div class="media-body media-middle feature-text">
                        <strong>14 ngày</strong> đổi trả
                    </div>
                </div>
            </div>
            <div class="feature">
                <div class="media">
                    <div class="media-left media-middle feature-icon">
                        <i class="ec ec-payment"></i>
                    </div>
                    <div class="media-body media-middle feature-text">
                        <strong>Thanh toán</strong> qua ngân hàng
                    </div>
                </div>
            </div>
            <div class="feature">
                <div class="media">
                    <div class="media-left media-middle feature-icon">
                        <i class="ec ec-tag"></i>
                    </div>
                    <div class="media-body media-middle feature-text">
                        <strong>Sách đã bán</strong> đều đảm bảo
                    </div>
                </div>
            </div>
        </div>
    </aside>
</div>
@push('scripts')
{{--     @parent --}}
    <script>
        $('.category-show').on('click', function(e){

        var id = $(this).data('id');
        window.location.href = "/category/" + id;

    });
    </script>
@endpush
