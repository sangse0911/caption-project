<section class=" section-onsale-product-carousel" data-animation="fadeIn">
    <header>
        <h1 class="h1">Sự kiện đang diễn ra</h1>
    </header>
    <div class="owl-nav">
        <a href="#onsale-products-carousel-prev" data-target="#onsale-products-carousel-57176fb23fad9" class="slider-prev"><i class="fa fa-angle-left"></i>Trước</a>
        <a href="#onsale-products-carousel-next" data-target="#onsale-products-carousel-57176fb23fad9" class="slider-next">Sau<i class="fa fa-angle-right"></i></a>
    </div>
    <div id="onsale-products-carousel-57176fb23fad9">
        <div class="onsale-product-carousel owl-carousel owl-loaded owl-drag">
            <div class="owl-stage-outer">
                <div class="owl-stage">
                    <div class="owl-item active" style="width: 815.012px;">
                        <div class="onsale-product">
                            <div class="onsale-product-thumbnails">
                                <a href="#">
                                    <div class="images">
                                        <img src="assets/images/deals/2.jpg" class="wp-post-image" alt="GamePad" title="GamePad">
                                    </div>
                                </a>
                            </div>
                            <div class="onsale-product-content">
                                <a href="single-product.html"><h3>Game Console Controller <br>+ USB 3.0 Cable</h3></a>
                                <span class="price"><span class="electro-price"><ins><span class="amount">$79.00</span></ins>
                                <del><span class="amount">$99.00</span></del>
                                </span>
                                </span>
                                <div class="deal-progress">
                                    {{-- <div class="deal-stock">
                                        <span class="stock-sold">Already Sold: <strong>2</strong></span>
                                        <span class="stock-available">Available: <strong>26</strong></span>
                                    </div> --}}
                                    {{-- <div class="progress">
                                        <span class="progress-bar" style="width:8%">8</span>
                                    </div> --}}
                                </div>
                                <div class="deal-countdown-timer">
                                    <div class="marketing-text text-xs-center">
                                        Sự kiện kết thúc trong: </div>
                                    <span class="deal-end-date" style="display:none;">2017-12-31</span>
                                    <div id="deal-countdown" class="countdown"><span data-value="-317" class="days"><span class="value">-317</span><b>Ngày</b></span><span class="hours"><span class="value">-10</span><b>Giờ</b></span><span class="minutes"><span class="value">-18</span><b>Phút</b></span><span class="seconds"><span class="value">-28</span><b>Gíây</b></span>
                                    </div>
                                    <script>
                                    // set the date we're counting down to
                                    var deal_end_date = document.querySelector(".deal-end-date").textContent;
                                    var target_date = new Date(deal_end_date).getTime();

                                    // variables for time units
                                    var days, hours, minutes, seconds;

                                    // get tag element
                                    var countdown = document.getElementById('deal-countdown');

                                    // update the tag with id "countdown" every 1 second
                                    setInterval(function() {

                                        // find the amount of "seconds" between now and target
                                        var current_date = new Date().getTime();
                                        var seconds_left = (target_date - current_date) / 1000;

                                        // do some time calculations
                                        days = parseInt(seconds_left / 86400);
                                        seconds_left = seconds_left % 86400;

                                        hours = parseInt(seconds_left / 3600);
                                        seconds_left = seconds_left % 3600;

                                        minutes = parseInt(seconds_left / 60);
                                        seconds = parseInt(seconds_left % 60);

                                        // format countdown string + set tag value
                                        countdown.innerHTML = '<span data-value="' + days + '" class="days"><span class="value">' + days + '</span><b>Ngày</b></span><span class="hours"><span class="value">' + hours + '</span><b>Giờ</b></span><span class="minutes"><span class="value">' +
                                            minutes + '</span><b>Phút</b></span><span class="seconds"><span class="value">' + seconds + '</span><b>Giây</b></span>';

                                    }, 1000);
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
