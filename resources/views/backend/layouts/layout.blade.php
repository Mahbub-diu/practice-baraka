<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="admin template,">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <title>Admin Template</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="/assets/fonts/icofont/icofont.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/date-picker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/responsive.css') }}">
</head>

<body>


    <div class="page-wrapper compact-wrapper" id="pageWrapper">

        <div class="page-main-header">
            <div class="main-header-right row m-0">
                <div class="main-header-left">
                    <div class="logo-wrapper">
                        <a href=""><img class="img-fluid" src="assets/images/logo/logo.png" alt=""></a>
                    </div>

                    <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center"
                            id="sidebar-toggle"></i></div>
                </div>
                <div class="left-menu-header col">
                    <ul>
                        <li>
                            <form class="form-inline search-form">
                                <div class="search-bg"><i class="fa fa-search"></i>
                                    <input class="form-control-plaintext" placeholder="Search here.....">
                                </div>
                            </form><span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span>
                        </li>
                    </ul>
                </div>
                <div class="nav-right col pull-right right-menu p-0">
                    <ul class="nav-menus">

                        <li class="onhover-dropdown p-0">
                            <button class="btn btn-primary-light" type="button">
                                <a href="">
                                    <i data-feather="log-out"></i>
                                    Log out
                                </a>
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
            </div>
        </div>

        <div class="page-body-wrapper null">
            <header class="main-nav">
                
                <nav>
                    <div class="main-navbar">
                      
                        <div id="mainnav">
                            <ul class="nav-menu custom-scrollbar" style="display: block;">
                                <li class="back-btn">
                                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                                </li>
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6>General </h6>
                                    </div>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title" href="javascript:void(0)">

                                        <span>Dashboard</span>
                                        <div class="according-menu"><i class="fa fa-angle-right"></i></div>
                                        <div class="according-menu"><i class="fa fa-angle-right"></i></div>
                                    </a>
                                    <ul class="nav-submenu menu-content" style="display: none;">
                                        <li><a href="index.html" class="active">Default</a></li>
                                        <li><a href="dashboard-02.html">Ecommerce</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link menu-title link-nav" href="">
                                    <span>File manager</span>
                                     
                                </a>
                            </li>


                            </ul>
                        </div>
                        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                    </div>
                </nav>
            </header>
            <div class="page-body">
                @yield('content')
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 footer-copyright">
                        <p class="mb-0">Copyright 2021-22 © viho All rights reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p class="pull-right mb-0">Hand crafted & made with <i class="fa fa-heart font-secondary"></i>
                        </p>
                    </div>
                </div>
            </div>
        </footer>

    </div>
  
    <script src="{{ asset('backend/assets/js/jquery-3.5.1.min.js') }}"></script> 
   
    <script src="{{ asset('backend/assets/js/sidebar-menu.js') }}"></script> 
    <script src="{{ asset('backend/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/datepicker.js') }}"></script>
    <script src="{{ asset('backend/assets/js/datepicker.en.js') }}"></script>


 
</body>

</html>
