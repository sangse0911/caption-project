<aside class="widget widget_products">
    <h3 class="widget-title">Sách mới cập nhật</h3>

    <ul class="product_list_widget">
        @foreach($books as $book)
        <li>
            <a href="single-product.html" title="Notebook Black Spire V Nitro  VN7-591G">
                <img width="180" height="180" src="{{  URL::to('assets/images/product/'. $book->images[0]->path )}}" alt="" class="wp-post-image"><span class="product-title">{{ $book->name }}</span>
            </a>
            <span class="electro-price"><ins><span class="amount">{{ $book->price }}</span></ins>
            <del><span class="amount">$2,29</span></del>
            </span>
        </li>
        @endforeach
    </ul>
</aside>
