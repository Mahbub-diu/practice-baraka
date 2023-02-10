<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Baraka Power</title>
 

    <link rel="stylesheet" href="{{ asset('frontend/assets/scss/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/fonts/icofont/icofont.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;300;400;500;600;700&amp;display=swap"
        rel="stylesheet">
 
    <link rel="icon" type="image/x-icon" href="{{ asset('frontend/assets/images/BPPL-Logo-fav.png') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/scss/slick.css') }}">
  
    <link rel="stylesheet" href="{{ asset('frontend/assets/scss/slick-theme.css') }}">
    <link rel="stylesheet" href=".{{ asset('frontend/assets/scss/lc_lightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/scss/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/scss/responsive.css') }}">
</head>

<body>

    <div class="preloader">
        <div class="preloader-inner">
           
            <img src="{{ asset('frontend/assets/images/BPPL-Logo.png') }}" alt="">
            <span class="loader"></span>
        </div>
    </div>
    <div class="fixed-share-main">
        <div class="share-toggleer">
            <a href="#" class="share-parent">
                <i class="icofont-share"></i>
            </a>
            <ul class="nav flex-column">

                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="icofont-facebook"></i></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="icofont-twitter"></i></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="icofont-instagram"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                </li>


            </ul>
        </div>

    </div>
  @yield('content')

 
  @include('frontend.includes.footer')

    <script src="{{ asset('frontend/assets/js/jquery-3.6.1.min.js') }}"></script>
   
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
   
    <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
    
    <script src="{{ asset('frontend/assets/js/lc_lightbox.lite.min.js') }}"></script>
    
    <script src="{{ asset('frontend/assets/js/alloy_finger.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/custom.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function (e) {

            // live handler
            lc_lightbox('.elem', {
                wrap_class: 'lcl_fade_oc',
                gallery: true,
                thumb_attr: 'data-lcl-thumb',

                skin: 'minimal',
                radius: 0,
                padding: 0,
                border_w: 0,
            });

        });
    </script>
</body>

</html>