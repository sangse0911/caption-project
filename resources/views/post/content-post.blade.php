<div id="owl-demo" class="owl-carousel owl-theme">
    @foreach($posts as $post)
    @foreach($post->imagePosts as $image)
    <a href="#">

        <div class="item"><img src="{{ URL::to('assets/images/post'. '/'. $image->path) }}"></div>
    </a>

  @endforeach
  @endforeach
</div>
<script type="text/javascript">
    (function($) {

  $("#owl-demo").owlCarousel({
    items:5,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true

  });

})(jQuery);
</script>
<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    }
})


$('.btn-link').click(function(e) {
    userId = $('input[class="userhidden"]').val();
    postId = e.target.id.substring(9);

    $.ajax({
        type: 'POST',
        url: '/addPostWishList',
        data: {
            userId: userId,
            postId: postId,
        },
        cache: false,
        success: function(data) {
            console.log('ss', data);
        },
        error: function(data) {
            console.log('ee', data);
        }
    });

    e.preventDefault();
});

</script>
