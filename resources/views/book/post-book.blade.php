<header class="page-header">
    <h1 class="page-title">Sach trong dien dan cua chung toi</h1>
    <p class="woocommerce-result-count">Showing 1–15 of 20 results</p>
</header>
<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="grid" aria-expanded="true">
        <ul class="products columns-3">
            @foreach($posts->chunk(3) as $new_post) @foreach($new_post as $post) @foreach($post->imagePosts as $image)
            <li class="product first">
                <div class="product-outer">
                    <div class="product-inner">
                        <span class="loop-product-categories"><a href="#" rel="tag">Smartphones</a></span>
                        <a data-toggle="modal" href="#myModal" class="post-show" id="post-{{ $post->id}}">
                            <h3>{{ $posts[0]->name }}</h3>
                            <div class="product-thumbnail">
                                <img src="{{ URL::to('assets/images/post/'. $image->path) }}" alt="">
                            </div>
                        </a>
                        <div class="price-add-to-cart">
                            <span class="price">
                                <span class="electro-price">
                                    <ins><span class="amount">$1,999.00</span></ins>
                            <del><span class="amount">$2,299.00</span></del>
                            </span>
                            </span>
                        </div>
                    </div>
                </div>
            </li>
            <li class="product">
                <div class="product-outer">
                    <div class="product-inner">
                        <span class="loop-product-categories"><a href="#" rel="tag">Smartphones</a></span>
                        <a data-toggle="modal" href="#myModal" class="post-show" id="post-{{ $post->id}}">
                            <h3>{{ $posts[1]->name }}</h3>
                            <div class="product-thumbnail">
                                <img src="{{ URL::to('assets/images/post/'. $image->path) }}" alt="">
                            </div>
                        </a>
                        <div class="price-add-to-cart">
                            <span class="price">
                                <span class="electro-price">
                                    <ins><span class="amount">$1,999.00</span></ins>
                            <del><span class="amount">$2,299.00</span></del>
                            </span>
                            </span>
                        </div>
                    </div>
                </div>
            </li>
            <li class="product last">
                <div class="product-outer">
                    <div class="product-inner">
                        <span class="loop-product-categories"><a href="#" rel="tag">Smartphones</a></span>
                        <a data-toggle="modal" href="#myModal" class="post-show" id="post-{{ $post->id}}">
                            <h3>{{ $posts[2]->name }}</h3>
                            <div class="product-thumbnail">
                                <img src="{{ URL::to('assets/images/post/'. $image->path) }}" alt="">
                            </div>
                        </a>
                        <div class="price-add-to-cart">
                            <span class="price">
                                <span class="electro-price">
                                    <ins><span class="amount">$1,999.00</span></ins>
                            <del><span class="amount">$2,299.00</span></del>
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
