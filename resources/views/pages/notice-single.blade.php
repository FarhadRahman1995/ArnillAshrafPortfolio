<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>Arnill Ashraf | Personal Website</title>
    <!-- Stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/fonts/flaticon.css')}}" rel="stylesheet">
    <!-- Responsive File -->
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
    <!-- Color File -->
    <link href="{{asset('css/color.css')}}" rel="stylesheet">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body>
<div class="page-wrapper">
    <!-- Main Header -->
    <header class="main-header">
        <!-- Header Top -->
        <div class="header-top">
            <div class="auto-container">
                <div class="inner clearfix">
                    <div class="top-left">
                        <ul class="social-links clearfix">
                            <li class="social-title">Follow Me:</li>
                            <li><a href="https://www.facebook.com/ArnillAshraf/"><span class="fab fa-facebook-f"></span></a></li>
                            <li><a href="https://twitter.com/arnillashraf?lang=en"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="https://www.linkedin.com/in/arnillashraf"><span class="fab fa-linkedin-in"></span></a></li>
                            <li><a href="https://www.instagram.com/arnill_ashraf"><span class="fab fa-instagram"></span></a></li>
                        </ul>
                    </div>
                    <div class="top-right">
                        {{-- --}}
                    </div>
                </div>
            </div>
        </div>
                <!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <!--Logo-->
                    <div class="logo-box">
                        <div class="logo"><a href="{{route('home')}}" title="Arnill Ashraf"><img src="{{url($main->logo_img)}}" alt="Arnill Ashraf" style="height: 150px; width: 150px; border-radius:25%;" title="Arnill Ashraf"></a></div>
                    </div>

                    <!--Nav Box-->
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light" id="home">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="active"><a href="{{route('home')}}">Home</a></li>
                                    <li><a href="{{route('home', '/#aboutus')}}" data-target="">About</a></li>
                                    <li><a href="{{route('blog')}}">Recent Stories</a></li>
                                    <li><a href="{{route('socialmedia')}}">Social Media</a></li>
                                    <li><a href="{{route('notice')}}">Notices</a></li>
                                    <li><a href="{{route('home', '/#contact')}}" data-target="">Contacts</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="{{route('home')}}" title=""><img src="{{url($main->logo_img)}}" alt="" title="" style="height: 50px; width: 50px; border-radius: 10%"></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav><!-- Main Menu End-->
                </div>
            </div>
        </div><!-- End Sticky Menu -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-cancel"></span></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="{{route('home')}}"><img src="{{url($main->logo_img)}}" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <!--Social Links-->
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="https://twitter.com/arnillashraf?lang=en"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="https://www.facebook.com/ArnillAshraf/"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="https://www.instagram.com/arnill_ashraf"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="https://www.linkedin.com/in/arnillashraf"><span class="fab fa-linkedin-in"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->
    </header>
    <!-- End Main Header -->

    <!-- Page Banner Section -->
    <section class="page-banner">
        <div class="image-layer lazy-image"><img src="{{asset('assets/images/big_image.jpg')}}" alt="" style="height: 100%; width: 100%;"></div>
        <div class="bottom-rotten-curve" style="background: url({{asset('assets/images/background/rotten-curve-5.png')}})"></div>
        <div class="auto-container">
            <h1>Notices Details</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">Notices Details</li>
            </ul>
        </div>

    </section>
    <!--End Banner Section -->

                <!--Content Side / Blog Sidebar-->
                <div class="content-side col-lg-12 col-md-12 col-sm-12">
                    <!--Event Details-->
                    <div class="event-details">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img class="lazy-image" alt="big_img" src="{{url($notices->big_image)}}"></figure>
                                <div class="date">25 <span class="month">Aug</span></div>
                            </div>
                            <div class="lower-content">
                            	<h2>{{$notices->title}}</h2>
                                <ul class="info clearfix">
                                    <ul class="info clearfix">
                                        <li><span class="icon far fa-clock"></span>Created at: {{$notices->created_at->toDateString('d M')}}</li>
                                    </ul>
                                </ul>
                                <div class="text-content">
                                    <p class="big-text">
                                        {{$notices->description}}
                                    </p>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


    <!-- Main Footer -->
    <footer class="main-footer mt-4">
        <div class="auto-container">
            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row clearfix">

                    <!--Column-->
                    <div class="column col-lg-4 col-md-8 col-sm-12">
                        <div class="footer-widget logo-widget">
                            <div class="widget-content">
                                <div class="footer-logo">
                                    <a href="{{route('home')}}" title=""><img src="{{url($main->logo_img)}}" alt="" title="" style="max-height: 70px; max-width: 70px; border-radius: 20%"></a>
                                </div>
                                <div class="text"><h3>{{$about->description}}</h3></div>
                                <ul class="social-links clearfix">
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-vimeo-v"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column col-lg-4 col-md-8 col-sm-12">
                        <div class="footer-widget links-widget">
                            <div class="widget-content">
                                <h3>Services</h3>
                                <ul>
                                    <li class="active"><a href="{{route('home')}}">Home</a></li>
                                    <li><a href="{{route('home', '/#aboutus')}}" data-target="">About</a></li>
                                    <li><a href="{{route('blog')}}">Recent Stories</a></li>
                                    <li><a href="{{route('socialmedia')}}">Social Media</a></li>
                                    <li><a href="{{route('notice')}}">Notices</a></li>
                                    <li><a href="{{route('home', '/#contact')}}" data-target="">Contacts</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column col-lg-4 col-md-8 col-sm-12">
                        <div class="footer-widget info-widget">
                            <div class="widget-content">
                                <h3>Contacts</h3>
                                <ul class="contact-info">
                                    <li>Mirpur DOHS, Dhaka,Bangladesh</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="auto-container">

                <!--Scroll to top-->
                <div class="clearfix offset-5">
                    <div class="copyright">Arnill Ashraf  &copy;  2020 All Right Reserved</div>
                    //Developed by Farhad Rahman
                </div>
            </div>
        </div>

    </footer>

</div>


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-up-arrow"></span></div>

<script src="{{asset('js/respond.js')}}"></script>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>
<script src="{{asset('js/jquery.fancybox.js')}}"></script>
<script src="{{asset('js/owl.js')}}"></script>
<script src="{{asset('js/appear.js')}}"></script>
<script src="{{asset('js/wow.js')}}"></script>
<script src="{{asset('js/lazyload.js')}}"></script>
<script src="{{asset('js/scrollbar.js')}}"></script>
<script src="{{asset('js/validate.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>

<script defer src="https://pro.fontawesome.com/releases/v5.10.0/js/all.js"></script>

<!--Google Map APi Key-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcaOOcFcQ0hoTqANKZYz-0ii-J0aUoHjk"></script>
<script src="{{asset('js/map-script.js')}}"></script>
<!--End Google Map APi-->
<script id="dsq-count-scr" src="//arnill-ashraf.disqus.com/count.js" async></script>
</body>
</html>