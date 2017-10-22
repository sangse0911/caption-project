<html>
   <head>
      <title>Ajax Example</title>
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>


   </head>

   <body>
      <form method="POST">

      {{ csrf_field() }}
      <div id = 'msg'>This message will be replaced using Ajax.
         Click the button to replace the message.</div>


      <button type="button" name="replace message" class="btn-link">replace</button>
      </form>
      <script>

            $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
         $('.btn-link').on('click', function(){

            $.ajax({
               type:'POST',
               url:'/getmsg',
               data:'_token = <?php echo csrf_token(); ?>',
               success:function(data){
                  $("#msg").html(data.msg);
               }
            });
         })

      </script>
   </body>

</html>