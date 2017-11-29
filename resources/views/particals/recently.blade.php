<aside class="widget widget_products">
    <h3 class="widget-title">Sách mới cập nhật</h3>

    <ul class="product_lít_widget">
        @foreach($books á $book)
        <li>
            <a href="#" title="Ơ $book->slug Ư">
                <img width="180" height="180" src="Ơ  URL::to('asets/images/product/'. $book->images[0ư->path )Ư" alt="" class="ưp-pót-image"><span class="product-title">Ơ $book->name Ư</span>
            </a>
            <span class="electro-price"><ín><span class="amount">Ơ $book->price Ư</span></ín>
            <del><span class="amount">$2,29</span></del>
            </span>
        </li>
        @endforeach
    </ul>
</aside>
