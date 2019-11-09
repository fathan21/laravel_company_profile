<!doctype html>
<html lang="en">

<head>
    <title>Noxen &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{url('assets/front/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{url('assets/front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/front/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{url('assets/front/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/front/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/front/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{url('assets/front/css/aos.css')}}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{url('assets/front/css/style.css')}}">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


    <div class="site-wrap" id="home-section">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>



        <header class="site-navbar site-navbar-target" role="banner">

            <div class="container mb-3">
                <div class="d-flex align-items-center">
                    <div class="site-logo mr-auto">
                        <a href="index.html">Noxen<span class="text-primary">.</span></a>
                    </div>
                    <div class="site-quick-contact d-none d-lg-flex ml-auto ">
                        <div class="d-flex site-info align-items-center mr-5">
                            <span class="block-icon mr-3"><span class="icon-map-marker"></span></span>
                            <span>34 Street Name, City Name Here, <br> United States</span>
                        </div>
                        <div class="d-flex site-info align-items-center">
                            <span class="block-icon mr-3"><span class="icon-clock-o"></span></span>
                            <span>Sunday - Friday 8:00AM - 4:00PM <br> Saturday CLOSED</span>
                        </div>

                    </div>
                </div>
            </div>


            <div class="container">
                <div class="menu-wrap d-flex align-items-center">
                    <span class="d-inline-block d-lg-none"><a href="#"
                            class="text-black site-menu-toggle js-menu-toggle py-5"><span
                                class="icon-menu h3 text-black"></span></a></span>



                    <nav class="site-navigation text-left mr-auto d-none d-lg-block" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav mr-auto ">
                            <li class="active"><a href="{{url('/')}}" class="nav-link">Home</a></li>
                            <li><a href="{{url('/services')}}" class="nav-link">Services</a></li>
                            <li><a href="{{url('/projects')}}" class="nav-link">Projects</a></li>
                            <li><a href="{{url('/about')}}" class="nav-link">About</a></li>
                            <li><a href="{{url('/blog')}}" class="nav-link">Blog</a></li>
                            <li><a href="{{url('/contact')}}" class="nav-link">Contact</a></li>
                        </ul>
                    </nav>

                    <div class="top-social ml-auto">
                        <a href="#"><span class="icon-facebook"></span></a>
                        <a href="#"><span class="icon-twitter"></span></a>
                        <a href="#"><span class="icon-linkedin"></span></a>
                    </div>
                </div>
            </div>



        </header>

        @yield("content")

        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <h2 class="footer-heading mb-3">About Us</h2>
                        <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and
                            Consonantia, there live the blind texts. </p>

                        <h2 class="footer-heading mb-4">Newsletter</h2>
                        <form action="#" class="d-flex" class="subscribe">
                            <input type="text" class="form-control mr-3" placeholder="Email">
                            <input type="submit" value="Send" class="btn btn-primary">
                        </form>
                    </div>
                    <div class="col-lg-8 ml-auto">
                        <div class="row">
                            <div class="col-lg-4 ml-auto">
                                
                            </div>
                            <div class="col-lg-4">
                                <h2 class="footer-heading mb-4">Navigation</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>

                            </div>



                        </div>
                    </div>
                </div>
                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <div class="border-top pt-5">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i
                                    class="icon-heart text-danger" aria-hidden="true"></i> by <a
                                    href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </footer>

    </div>

    <script src="{{url('assets/front/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{url('assets/front/js/jquery-migrate-3.0.0.js')}}"></script>
    <script src="{{url('assets/front/js/popper.min.js')}}"></script>
    <script src="{{url('assets/front/js/bootstrap.min.js')}}"></script>
    <script src="{{url('assets/front/js/owl.carousel.min.js')}}"></script>
    <script src="{{url('assets/front/js/jquery.sticky.js')}}"></script>
    <script src="{{url('assets/front/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{url('assets/front/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{url('assets/front/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{url('assets/front/js/jquery.stellar.min.js')}}"></script>
    <script src="{{url('assets/front/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{url('assets/front/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{url('assets/front/js/aos.js')}}"></script>

    <script src="{{url('assets/front/js/main.js')}}"></script>

</body>

</html>