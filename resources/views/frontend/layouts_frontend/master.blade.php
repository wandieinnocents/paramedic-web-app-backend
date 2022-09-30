<!DOCTYPE html>
<html lang="zxx">  
    
<head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.html">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/frontend/images/fav.png') }}">
        <!-- Bootstrap v4.4.1 css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/font-awesome.min.css') }}">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/animate.css') }}">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/owl.carousel.css') }}">
        <!-- slick css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/slick.css') }}">
        <!-- off canvas css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/off-canvas.css') }}">
        <!-- linea-font css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/fonts/linea-fonts.css') }}">
        <!-- flaticon css  -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/fonts/flaticon.css') }}">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/magnific-popup.css') }}">
        <!-- Main Menu css -->
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/rsmenu-main.css') }}">
        <!-- spacing css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/rs-spacing.css') }}">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/style.css') }}"> <!-- This stylesheet dynamically changed from style.less -->
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/responsive.css') }}">
        <!-- banner css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/banner.css') }}">
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="defult-home">
        
        <!--Preloader area start here-->
        {{-- <div id="loader" class="loader">
            <div class="loader-container">
                <div class='loader-icon'>
                    <img src="{{ asset('assets/frontend/images/pre-logo.png') }}" alt="">
                </div>
            </div>
        </div> --}}
        <!--Preloader area End here--> 


        <!--Full width header Start-->
        <div class="full-width-header header-style1 home1-modifiy">
            <!--Header Start-->
            @include('frontend.includes_frontend.header_frontend')
            <!--Header End-->
        </div>
        <!--Full width header End-->

		<!-- Main content Start -->
        <div class="main-content">
           @yield('content')
        </div> 
        <!-- Main content End -->

        <!-- Footer Start -->
        <footer id="rs-footer" class="rs-footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-50">
                            <h4 class="widget-title">Quick Links</h4>
                            <ul class="site-map">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Courses</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="contacts.html">Contact Us</a></li>
                                <li><a href="#">Gallery</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-50">
                            <h4 class="widget-title">School</h4>
                            <ul class="site-map">
                                <li><a href="#">About</a></li>
                                <li><a href="staff.html">Staff</a></li>
                                <li><a href="faq.html">FAQ's</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="volunteer.html">Volunteer</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-50">
                            <h4 class="widget-title">Courses</h4>
                            <ul class="site-map">
                                <li><a href="#">Dip. Clinical Medicine</a></li>
                                <li><a href="#">Dip. Dentistry</a></li>
                                <li><a href="#">Nursing & Midwifery</a></li>
                                <li><a href="#">Dip. Medical Lab. Technology</a></li>
                                <li><a href="#">Dip. Public Health></li>
                            </ul>
                        </div>
                        
                        <div class="col-lg-3 col-md-12 col-sm-12 footer-widget">
                            <h4 class="widget-title">Address</h4>
                            <ul class="address-widget">
                                <li>
                                    <i class="flaticon-location"></i>
                                    <div class="desc">Maya - Nakirebe along Kampala - Masaka Road,</div>
                                </li>
                                <!-- <li>
                                    <i class="flaticon-email">
                                        <div class="desc">
                                            P.O BOX 72128, Kampala, Uganda
                                        </div> 
                                    </i>
                                </li> -->
                                <li>
                                    <i class="flaticon-call"></i>
                                    <div class="desc">
                                    <ul>
                                        <a href="tel:(123)-456-7890">+256-392 00 1503 </a> ,<br>
                                        <a href="tel:(123)-456-7890">+256-704789181</a> ,<br>
                                        <a href="tel:(123)-456-7890">+256-775 534 797 (whatsapp)</a>
                                    </ul>
                                    </div>
                                </li>
                                <li>
                                    <i class="flaticon-email"></i>
                                    <div class="desc">
                                        <a href="mailto:infoname@gmail.com">info.ipim@gmail.com</a> , 
                                        <a href="http://paramedicalinstitute.org">http://paramedicalinstitute.org</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">                    
                    <div class="row y-middle">
                        <div class="col-lg-4 md-mb-20">
                            <div class="footer-logo md-text-center">
                                <a href="index2.html"><img src="{{ asset('assets/frontend/images/pre-logo.png') }}" alt="" style="size: 0.5cm;"></a>
                            </div>
                        </div>
                        <div class="col-lg-4 md-mb-20">
                            <div class="copyright text-center md-text-left">
                                <!-- <p>&copy; 2022 All Rights Reserved. Developed By <a href="http://rstheme.com/">RSTheme</a></p> -->
                                
                                <p>&copy; 2022 All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 text-right md-text-left">
                            <ul class="footer-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->

        <!-- start scrollUp  -->
        <div id="scrollUp">
            <i class="fa fa-angle-up"></i>
        </div>
        <!-- End scrollUp  -->

        <!-- Search Modal Start -->
        <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span class="flaticon-cross"></span>
            </button>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <form>
                            <div class="form-group">
                                <input class="form-control" placeholder="Search Here..." type="text">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Modal End -->

        <!-- modernizr js -->
        <script src="{{ asset('assets/frontend/js/modernizr-2.8.3.min.js') }}"></script>
        <!-- jquery latest version -->
        <script src="{{ asset('assets/frontend/js/jquery.min.js') }}"></script>
        <!-- Bootstrap v4.4.1 js -->
        <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
        <!-- Menu js -->
        <script src="{{ asset('assets/frontend/js/rsmenu-main.js') }}"></script> 
        <!-- op nav js -->
        <script src="{{ asset('assets/frontend/js/jquery.nav.js') }}"></script>
        <!-- owl.carousel js -->
        <script src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>
        <!-- Slick js -->
        <script src="{{ asset('assets/frontend/js/slick.min.js') }}"></script>
        <!-- isotope.pkgd.min js -->
        <script src="{{ asset('assets/frontend/js/isotope.pkgd.min.js') }}"></script>
        <!-- imagesloaded.pkgd.min js -->
        <script src="{{ asset('assets/frontend/js/imagesloaded.pkgd.min.js') }}"></script>
        <!-- wow js -->
        <script src="{{ asset('assets/frontend/js/wow.min.js') }}"></script>
        <!-- Skill bar js -->
        <script src="{{ asset('assets/frontend/js/skill.bars.jquery.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/jquery.counterup.min.js') }}"></script>        
         <!-- counter top js -->
        <script src="{{ asset('assets/frontend/js/waypoints.min.js') }}"></script>
        <!-- video js -->
        <script src="{{ asset('assets/frontend/js/jquery.mb.YTPlayer.min.js') }}"></script>
        <!-- magnific popup js -->
        <script src="{{ asset('assets/frontend/js/jquery.magnific-popup.min.js') }}"></script>      
        <!-- plugins js -->
        <script src="{{ asset('assets/frontend/js/plugins.js') }}"></script>
        <!-- contact form js -->
        <script src="{{ asset('assets/frontend/js/contact.form.js') }}"></script>
        <!-- main js -->
        <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
    </body>

</html>