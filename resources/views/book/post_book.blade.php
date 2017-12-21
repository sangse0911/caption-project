<img style="margin: auto;" src="{{ URL::to('img/HR.png') }}">
<span style="margin-left: 40%; color: #a3d133; font-weight: bold;font-size: 35px; font-family: cursive;">Góc Sách</span>
<div class="hr">
    <hr/>
</div>
<br>
<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="grid" aria-expanded="true" >
        <ul class="products columns-3"  id="borderimg2">
            {{-- {{ dd($books) }} --}}
            @foreach($books as $book)
            <li class="product ">
                <div class="product-outer">
                    <div class="product-inner">
                        <a data-toggle="modal" href="#myModal" class="book-show" id="book-{{ $book->id}}">
                            <h3>{{ $book->name }}</h3>
                            <div class="product-thumbnail" >
                                <img src="{{ URL::to('assets/images/product/' . $book->images[0]->path) }}" style="margin: auto; max-width: 180px; max-height: 220px;" alt="">
                            </div>
                        </a>
                        <div class="price-add-to-cart" style="margin: auto;">
                            <span class="price">
                                <br>
                                <span class="electro-price">
                                    <span style="margin-left: 60px; color: red;" >Gía:  {{ $book->price }} VNĐ</span>
                                    <br><span style="font-size: 15px;">Người đăng: </span> <span style="font-size: 15px; color: blue;">
                                        {{ $book->contracts[0]->user->name }}
                                    </span>
                                    <span class="amount"> </span>
                                </span>
                            </span>
                        </div>
                        <div style="text-align: center;">
                            <i class="fa fa-bookmark" aria-hidden="true"></i> <span style="color: red;">
                                @php
                                    switch ($book->contracts[0]->kind) {
                                        case '1':
                                            echo 'Sách cho thuê';
                                            break;
                                        case '0':
                                            echo 'Sách bán';
                                            break;

                                        default:
                                            echo 'Sách cho mượn';
                                            break;
                                    }
                                @endphp
                            </span>
                        </div>
                    </div><!-- /.product-inner -->
                </div><!-- /.product-outer -->
            </li><!-- /.product -->
            @endforeach
        </ul>
    </div>
</div>
<header class="page-header" style="text-align: right;">
    <h2 class="h1"><a href="{{ route('post.index') }}" style="font-size: 20px;">>>Xem Thêm<<</a></h2>
</header>
