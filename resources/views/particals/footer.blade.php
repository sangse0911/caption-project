<footer id="colophon" class="site-footer">

   <style type="text/css"></style>    <div class="footer-newsletter" style="height: 70px;">
        <div class="container" style="text-align: center; height: 60px;">
            <ul style="list-style: none; font-size: 25px; margin-top: 5px;">
                <a href="{{ route('book.sell') }}" style="color: white;"><li style="display: inline;">Sách bán |</li></a>
                 <a href="{{ route('book.renter') }}" style="color: white;"><li style="display: inline;">Sách thuê |</li></a>
                 <a href="javascript:void(0)" style="color: white;"><li style="display: inline;">Bán sách & Cho thuê |</li></a>
                 <a href="{{ route('post.index') }}" style="color: white;"><li style="display: inline;">Góc sách |</li></a>
                 <a href="javascript:void(0)" style="color: white;"><li style="display: inline;">Liên hệ quảng cáo</li></a>
            </ul>
        </div>
    </div>
    <div>
    <div style="margin: auto;width: 500px;height: 150px;" >
        <img src="{{ URL::to('img/logo.jpg') }}" style="float: left;">
            <div>
                <br>
                © BOOKSERVICEONLINE
                                <br>
                Địa chỉ: {{ $contacts->get(0)->address }}
                <br>
                Điện thoại : {{ $contacts->get(0)->phone }}
                <br>
                Email: {{ $contacts->get(0)->email }}
                <br>Số Tài Khoản: {{ $contacts->get(0)->account }}
            </div>
    </div>
    </div>
    <div style="clear: both;"></div>
    <div class="copyright-bar">
        <div class="container">
            <div class="pull-left flip copyright">&copy; <a href="http://demo2.transvelo.in/html/electro/">BSO</a> - All Rights Reserved</div>
        </div>
    </div>
</footer>
