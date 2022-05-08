
<!DOCTYPE html>
<html>

<!-- Mirrored from html.ethic.templaza.net/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Apr 2022 14:44:52 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Ethic - HomePage</title>
    <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('front/fonts/awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>
        <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <link href='{{ asset('front/css/owl.carousel.css') }}' rel='stylesheet' type='text/css'>
    <link href='{{ asset('front/css/owl.theme.css') }}' rel='stylesheet' type='text/css'>
    <link href="{{ asset('front/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('front/main.css') }}" rel="stylesheet" />
</head>

<body>
    
    @include('includes.header')
    
    @yield('content')
    @include('includes.footer')
    <script>
        var Desktop       =   5,
            tabletportrait    =   2,
            mobilelandscape   =   1,
            mobileportrait    =   1,
            resizeTimer       =   null;
    </script>
    <script src="{{ asset('front/js/jquery.min.js') }}"></script>
    <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/js/off-canvas.js') }}"></script>
    <script src="{{ asset('front/js/jquery.isotope.min.js') }}"></script>
    <script src="{{ asset('front/js/resize.js') }}"></script>
    <script src="{{ asset('front/js/custom-portfolio.js') }}"></script>
    <script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.parallax-1.1.3.js') }}"></script>
    <script src="{{ asset('front/js/custom.js') }}"></script>
    <!-- Main Javascript file -->
    <script src="{{ asset('assets/dist/js/sweetalert.min.js') }}"></script>

    <script>
      $(document).ready(function(){
          $(".delete-confirm").on('click', function(e){
          e.preventDefault();
          var url = $(this).data('url');
          console.log($('meta[name=csrf-token]').attr('content'));
          swal({
                  title: "êtes vous sûr?",
                  text: "Voulez vous supprimer ce "+$(this).data('model'),
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
              })
              .then((willDelete) => {
                  if (willDelete) {
                      var data = {
                          "_token" : $('meta[name="csrf-token"]').attr('content'),
                      };
                      $.ajax({
                          type: "DELETE",
                          url: url,
                          data: data,
                          success: function(response){
                              console.log(response);
                              swal(response.deleted, {
                                  icon: "success",
                              }).then((result) => {
                                  location.reload();
                              });
                          }
                      })
                  } else {
                      swal("Votre action est annulé");
                  }
              });
          });
          $(".edit-confirm").on('click', function(e){
              e.preventDefault();
              console.log($(this).data('model'));
              var id = $(this).closest('tr').find('.product_id').val();
              var href = $(this).attr('href');
              swal({
                  title: "êtes vous sûr?",
                  text: "Voulez vous editer ce "+$(this).data('model'),
                  icon: "primary",
                  buttons: true,
                  dangerMode: false,
              })
              .then((willEdit) => {
                  if (willEdit) {
                      window.location.href = href;
                  } else {
                      swal("Votre action est annulé");
                  }
              });
          });
      });
    </script>
</body>

<!-- Mirrored from html.ethic.templaza.net/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Apr 2022 14:48:42 GMT -->
</html>
