<header id="masthead" class="site-header header-v3 header-v2">
    <div class="container">
        <div class="row">
            <!-- ============================================================= Header Logo ============================================================= -->
            <div class="header-logo" >
                        <a href="/" class="header-logo-link">
                            <img src="{{ URL::to('img/logopage.jpg') }}" style="height: 70px;width: 70px; margin-left: 80px;">
                            <span style="font-weight: bold;font-size: 25px;color: #0CC3D3;margin-top:30px;">BookServiceOnline</span>
                        </a>
                    </div>
            <!-- ============================================================= Header Logo : End============================================================= -->
            <form class="navbar-search" method="get" action="">
                <label class="sr-only screen-reader-text" for="search">Search for:</label>
                <div class="input-group">
                    <input type="text" id="search" class="form-control search-field" dir="ltr" v-model="query" placeholder="Tìm kiếm sách">
                    <div class="input-group-btn">
                        <button type="button" id="button-search" class="btn btn-secondary button-search" v-if="!loading" @click="search()"><i class="ec ec-search"></i></button>
                    </div>
                </div>
            </form>
            <ul class="navbar-mini-cart navbar-nav animate-dropdown nav pull-right flip">
                <li class="nav-item dropdown">
                    <a href="{{ route('cart.index') }}" class="nav-link">
                        <i class="ec ec-shopping-bag"></i>
                        <span class="cart-items-count count">{{ Cart::count() }}</span>
                    </a>
                </li>
            </ul>
              <ul class="navbar-wishlist nav navbar-nav pull-right flip">
                @if(Auth::guest())
                <li class="nav-item">
                    <a href="javascript:void(0)" class="nav-link" id="wishList">
                        <i class="ec ec-favorites"></i>
                    </a>
                </li>
                @else
                <li class="nav-item">
                    <a href="javascript:void(0)" class="nav-link wishList" data-id="{{ Auth::user()->id }}" id="wishList">
                        <i class="ec ec-favorites"></i>
                    </a>
                </li>
                @endif
            </ul>
        </div>
        <!-- /.row -->
    </div>
</header>
@push('scripts')
<script>
    $('.wishList').click(function(e) {
        var id = $(this).data('id');
        window.location.assign("/wishlistByUser/" + id);
    });

    // $('#button-search').click(function(e) {

    //    window.location.assign('/search');

    // });
</script>
@endpush
