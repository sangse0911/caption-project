<div id="owl-demo" class="owl-carousel owl-theme">
    @foreach($books as $book) @foreach($book->images as $image)
    <div class="item">
        <img src="{{ URL::to('assets/images/product'. '/' . '1611508176712.jpg') }}">

    </div>
    <!-- /.products -->
    @endforeach @endforeach

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
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function(){
        $('.btn-link').on('click', function(e){

            var bookId = e.currentTarget.id.substring(9);
            var userId = $('input.hiddenfieldclass').val();

            $.ajax({

                type:'POST',
                url:'/addToPostWish',
                contentType: "application/json; charset=utf-8",
                dataType: 'JSON',
                data:{
                    userId : userId,
                    bookId : bookId,
                },
                success:function(data){
                    console.log(data);
                }
            });
        });
    });

</script>
