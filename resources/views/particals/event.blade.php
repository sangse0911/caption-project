<section class=" section-onsale-product-carousel" data-animation="fadeIn" id="event-field">
    <header style="text-align: center; font-weight: bold;">
        <h1 class="h1">Sự kiện đang diễn ra</h1>
    </header>
    <div class="owl-nav">
        <a href="#onsale-products-carousel-prev" data-target="#onsale-products-carousel-57176fb23fad9" class="slider-prev"><i class="fa fa-angle-left"></i>Trước</a>
        <a href="#onsale-products-carousel-next" data-target="#onsale-products-carousel-57176fb23fad9" class="slider-next">Sau<i class="fa fa-angle-right"></i></a>
    </div>
    <div id="onsale-products-carousel-57176fb23fad9">
        <div class="onsale-product-carousel owl-carousel owl-loaded owl-drag">
            @foreach($events as $event)
            <div class="owl-stage-outer">
                <div class="owl-stage">
                    <div class="owl-item active" style="width: 815.012px;">
                        <div class="onsale-product">
                            <div class="onsale-product-thumbnails">
                                <div class="savings">
                                    <span class="savings-text">
                                    Tiết kiệm <span class="amount">20.000 VNĐ</span>
                                    </span>
                                </div>
                                <div class="images" style="margin-top: 48px;">
                                    <a href="#">
                                    <img width="450" height="600" src="{{ URL::to('assets/images/event/'. $event->path) }}" class="wp-post-image" alt="" title="{{ $event->title }}">
                                    </a>
                                </div>
                            </div>
                            <div class="onsale-product-content" style="padding-left: 0px;">
                                <a href="javascript:void(0)">
                                    <h3>{{ $event->title }}</h3>
                                </a>
                                </span>
                                </span>
                                <div class="deal-progress">
                                </div>
                                <div class="deal-countdown-timer" style="margin-top: 70px;margin-left: 0px;">
                                    <div class="marketing-text text-xs-center">
                                        Sự kiện kết thúc trong: </div>
                                    <span id="deal-end-date-{{ $event->id }}" class="deal-end-date" style="display:none;">{{ $event->end }}</span>
                                    <div id="deal-countdown-{{ $event->id }}" class="countdown" style="margin-left: 0px; ">
                                        <span style="padding-left: 0px;" data-value="" class="days">
                                            <span class="value"></span><b>Ngày</b>
                                        </span>
                                        <span class="hours ">
                                            <span class="value"></span><b>Giờ</b>
                                        </span>
                                        <span class="minutes">
                                            <span class="value"></span><b>Phút</b>
                                        </span>
                                        <span class="seconds">
                                            <span class="value"></span><b>Gíây</b>
                                        </span>
                                    </div>
                                    <script>
                                    (function() {
                                        // set the date we're counting down to
                                        var id = "{{ $event->id }}";

                                        var deal_end_date = document.getElementById("deal-end-date-"+ id).textContent;
                                        var target_date = new Date(deal_end_date).getTime();

                                        // variables for time units
                                        var days, hours, minutes, seconds;

                                        // get tag element
                                        console.log(id);
                                        var countdown = document.getElementById('deal-countdown-' + id);

                                        // update the tag with id "countdown " every 1 second
                                        setInterval(function() {

                                            // find the amount of "seconds " between now and target
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
                                            countdown.innerHTML = '<span data-value=" ' + days + ' " class="days "><span class="value ">' + days + '</span><b>Ngày</b></span><span class="hours "><span class="value ">' + hours + '</span><b>Giờ</b></span><span class="minutes "><span class="value ">' +
                                                minutes + '</span><b>Phút</b></span><span class="seconds "><span class="value ">' + seconds + '</span><b>Giây</b></span>';

                                        }, 1000);
                                    })();
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
