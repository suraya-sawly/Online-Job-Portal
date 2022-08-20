<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Job Board</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/slicknav.css">

    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <x-app-layout>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- header-start -->
        <header>
            <div class="header-area ">
                <div id="sticky-header" class="main-header-area">
                    <div class="container-fluid ">
                        <div class="header_bottom_border">
                            <div class="row align-items-center">
                                <div class="col-xl-3 col-lg-2">
                                    <div class="logo">
                                        <a href="index.html">
                                            <img src="img/logo.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-7">
                                    <div class="main-menu  d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a href="{{url('/')}}">home</a></li>
                                                <li><a href="{{url('/browse')}}">Browse Job</a></li>
                                                <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                                    <ul class="submenu">
                                                        <li><a href="candidate.html">Candidates </a></li>
                                                        <li><a href="job_details.html">job details </a></li>
                                                        <li><a href="elements.html">elements</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                                    <ul class="submenu">
                                                        <li><a href="blog.html">blog</a></li>
                                                        <li><a href="single-blog.html">single-blog</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>

                                @if(Route::has('login'))

                                @auth
                                <li class="nav-item"><a class="nav-link" style="background-color:blue; color:white;"
                                        href="{{url('myappoinment')}}">My consultation List</a></li>


                                <div class="main-menu  d-none d-lg-block">
                                    <ul id="navigation">
                                        <li>
                                            <form method="POST" action="{{ route('logout') }}" x-data>
                                                @csrf

                                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                                    @click.prevent="$root.submit();">
                                                    {{ __('Log Out') }}
                                                </x-jet-dropdown-link>
                                            </form>
                                        </li>
                                    </ul>
                                </div>






                                @else

                                <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                    <div class="Appointment">
                                        <div class="phone_num d-none d-xl-block">
                                            <a href="{{Route('login')}}">Log in</a>
                                        </div>

                                        <div class="phone_num d-none d-xl-block">
                                            <a href="{{Route('register')}}">Register</a>
                                        </div>
                                        <div class="d-none d-lg-block">
                                            <a class="boxed-btn3" href="#">Post a Job</a>
                                        </div>
                                    </div>
                                </div>

                                @endauth
                                @endif

                                <div class="col-12">
                                    <div class="mobile_menu d-block d-lg-none"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-end -->

        <!-- slider_area_start -->
        <div class="slider_area">
            <div class="single_slider  d-flex align-items-center slider_bg_1">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-6">
                            <div class="slider_text">

                                <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">Find your Dream
                                    Job
                                </h3>
                                <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">We provide online
                                    instant cash loans with quick approval that suit your term length</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ilstration_img wow fadeInRight d-none d-lg-block text-right" data-wow-duration="1s"
                data-wow-delay=".2s">
                <img src="img/banner/illustration.png" alt="">
            </div>
        </div>
        <!-- slider_area_end -->

        @include('user.catagory')

        @include('user.popularcat')

        @include('user.joblist')

        <!-- @include('user.candidate') -->







        @include('user.appoinment')




        <!-- footer start -->
        <footer class="footer">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-md-6 col-lg-3">
                            <div class="footer_widget wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                                <div class="footer_logo">
                                    <a href="#">
                                        <img src="img/logo.png" alt="">
                                    </a>
                                </div>
                                <div class="socail_links">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="ti-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-2 col-md-6 col-lg-2">
                            <div class="footer_widget wow fadeInUp" data-wow-duration="1.1s" data-wow-delay=".4s">
                                <h3 class="footer_title">
                                    Company
                                </h3>
                                <ul>
                                    <li><a href="#">About </a></li>
                                    <li><a href="#"> Pricing</a></li>
                                    <li><a href="#">Carrier Tips</a></li>
                                    <li><a href="#">FAQ</a></li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-lg-3">
                            <div class="footer_widget wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".5s">
                                <h3 class="footer_title">
                                    Category
                                </h3>
                                <ul>
                                    <li><a href="#">Design & Art</a></li>
                                    <li><a href="#">Engineering</a></li>
                                    <li><a href="#">Sales & Marketing</a></li>
                                    <li><a href="#">Finance</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-lg-4">
                            <div class="footer_widget wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".6s">
                                <h3 class="footer_title">
                                    Subscribe
                                </h3>
                                <form action="#" class="newsletter_form">
                                    <input type="text" placeholder="Enter your mail">
                                    <button type="submit">Subscribe</button>
                                </form>
                                <p class="newsletter_text">Esteem spirit temper too say adieus who direct esteem esteems
                                    luckily.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-right_text" data-wow-duration="1.4s" data-wow-delay=".3s">
                <div class="container">
                    <p class="text-center">
                        All rights reserved | This template is made with Krity
                    </p>
                </div>
            </div>
        </footer>
        <!--/ footer end  -->

        <!-- link that opens popup -->
        <!-- JS here -->
        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/ajax-form.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/scrollIt.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/nice-select.min.js"></script>
        <script src="js/jquery.slicknav.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/gijgo.min.js"></script>



        <!--contact js-->
        <script src="js/contact.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/mail-script.js"></script>


        <script src="js/main.js"></script>
    </x-app-layout>
</body>

</html>