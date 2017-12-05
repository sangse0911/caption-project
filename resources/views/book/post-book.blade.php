<header class="page-header">
    <h1 class="page-title">Sách trong diễn đàn của chúng tôi</h1>
    <p class="woocommerce-result-count">Hiển thị 20/ toltal sách</p>
</header>
<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="grid" aria-expanded="true">
        <ul class="products columns-3">
            @foreach($books->chunk(3) as $new_book) @foreach($new_book as $book) @foreach($book->images as $image)
            <li class="product first">
                <div class="product-outer">
                    <div class="product-inner">
                        <span class="loop-product-categories"><a href="#" rel="tag"></a></span>
                        <a data-toggle="modal" href="#myModal" class="post-show" id="post-{{ $book->id}}">
                            <h3>{{ $books[0]->name }}</h3>
                            <div class="product-thumbnail">
                                <img src="{{ URL::to('assets/images/post/'. $image->path) }}" alt="">
                            </div>
                        </a>
                        <div class="price-add-to-cart">
                            <span class="price">
                                <span class="electro-price">
                                    <ins><span class="amount">Liên hệ</span></ins>
                            {{-- <del><span class="amount">$2,299.00</span></del> --}}
                            </span>
                            </span>
                        </div>
                    </div>
                </div>
            </li>
            <li class="product">
                <div class="product-outer">
                    <div class="product-inner">
                        <span class="loop-product-categories"><a href="#" rel="tag"></a></span>
                        <a data-toggle="modal" href="#myModal" class="post-show" id="post-{{ $book->id}}">
                            <h3>{{ $books[1]->name }}</h3>
                            <div class="product-thumbnail">
                                <img src="{{ URL::to('assets/images/post/'. $image->path) }}" alt="">
                            </div>
                        </a>
                        <div class="price-add-to-cart">
                            <span class="price">
                                <span class="electro-price">
                                    <ins><span class="amount">Liên hệ</span></ins>
                            {{-- <del><span class="amount">$2,299.00</span></del> --}}
                            </span>
                            </span>
                        </div>
                    </div>
                </div>
            </li>
            <li class="product last">
                <div class="product-outer">
                    <div class="product-inner">
                        <span class="loop-product-categories"><a href="#" rel="tag"></a></span>
                        <a data-toggle="modal" href="#myModal" class="post-show" id="post-{{ $book->id}}">
                            <h3>{{ $books[2]->name }}</h3>
                            <div class="product-thumbnail">
                                <img src="{{ URL::to('assets/images/post/'. $image->path) }}" alt="">
                            </div>
                        </a>
                        <div class="price-add-to-cart">
                            <span class="price">
                                <span class="electro-price">
                                    <ins><span class="amount">Liên hệ</span></ins>
                            {{-- <del><span class="amount">$2,299.00</span></del> --}}
                            </span>
                            </span>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach @endforeach @endforeach
        </ul>
    </div>
</div>
