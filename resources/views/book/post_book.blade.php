<header class="page-header">
    <h1 class="page-title">Sách trong diễn đàn của chúng tôi</h1>
    <p class="woocommerce-result-count">Hiển thị 20/ {{ count($books) }} sách</p>
</header>
<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="grid" aria-expanded="true">
        <ul class="products columns-3">
            {{-- {{ dd($books) }} --}}
            @foreach($books as $book) @foreach($book->images as $image)
            <li class="product">
                <div class="product-outer">
                    <div class="product-inner">
                        <span class="loop-product-categories"><a href="#" rel="tag"></a></span>
                        <a data-toggle="modal" href="#myModal" class="post-show" id="post-{{ $book->id}}">
                            <h3>{{ $book->name }}</h3>
                            <div class="product-thumbnail">
                                <img src="{{ URL::to('assets/images/product/'. $image->path) }}" alt="">
                            </div>
                        </a>
                        <div class="price-add-to-cart">
                            <span class="price">
                                <span class="electro-price">
                                    <ins><span class="amount">Liên hệ</span></ins>
                                {{-- <ins><span class="amount">{{  }}</span></ins> --}}
                            </span>
                            </span>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach @endforeach
        </ul>
        {!! $books->links() !!}
    </div>
</div>
