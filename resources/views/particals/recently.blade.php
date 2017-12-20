<aside class="widget widget_products">
    <h3 class="widget-title">Sách mới cập nhật</h3>

    <ul class="product_list_widget">
        @foreach($books as $book)
        <li>
            <a data-toggle="modal" href="#myModal" class="book-show" id="book-{{ $book->id }}" title="{{ $book->slug }}">
                <img width="180" height="180" src="{{ URL::to('assets/images/product'. '/'. $book->images->first()['path']) }}" alt="" class="wp-post-image"><span class="product-title">{{ $book->name }}</span>
            </a>
            <span class="electro-price"><ins><span class="amount">{{ $book->price }} VNĐ</span></ins>
            </span>
        </li>
        @endforeach
    </ul>
</aside>
