<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Arnill Ashraf | Personal Website</title>
<!-- Stylesheets -->
    <!-- CSS only -->
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
    <!-- Main Header -->
    <header class="main-header header-style-two">
        <!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <!--Logo-->
                    <div class="logo-box">
                        <div class="logo"><a href="{{route('home')}}" title="Arnill Ashraf"><img src="{{url($main->logo_img)}}" alt="Arnill Ashraf" style="height: 150px; width: 150px; border-radius: 25%;" title="Arnill Ashraf"></a></div>
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
									<li><a href="/#aboutus{{--{{route('home', '/#aboutus')}}--}}" data-target="">About</a></li>
                                    <li><a href="{{route('blog')}}">Recent Stories</a></li>
                                    <li><a href="{{route('socialmedia')}}">Social Media</a></li>
                                    <li><a href="{{route('notice')}}">Notices</a></li>
                                    <li><a href="/#contact{{--{{route('home', '/#contact')}}--}}" data-target="">Contacts</a></li>
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

    <!-- Banner Section -->
    <section class="banner-section style-two">
        <div class="banner-carousel love-carousel owl-theme owl-carousel" data-options='{"loop": false, "margin": 0, "autoHeight":true, "singleItem" : true, "autoplay": false, "lazyload":false, "nav": true, "dots": true, "autoplay": false, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "1" } , "1024":{ "items" : "1" }}}'>
            <!-- Slide Item -->
            <div class="slide-item">
				<div class="image-layer lazy-image" data-bg="url(<?php echo $main->bc_img ?>)"></div>
                <div class="bottom-rotten-curve" style="background: url({{asset('assets/images/background/rotten-curve-5.png')}})"></div>

                <div class="auto-container">
                    <div class="content-box">
                        <h2>{{$main->title}}</h2>
                        <div class="text">{{$main->sub_title}}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

	<!--About Section-->
    <section class="about-section style-two"  id="aboutus">
    	<div class="top-rotten-curve"></div>
        <div class="circle-one"></div>
        <div class="circle-two"></div>
        <div class="upper-boxes">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--About Feature-->
                    <div class="about-feature-two col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms">
							<div class="image-layer lazy-image"><img src="{{asset('assets/images/big_image.jpg')}}" alt=""> </div>
                            <div class="text" style="padding-top: 200px;">I have a website because it's an interesting tool, very - and quite.</div>
                        </div>
                    </div>
                    <!--About Feature-->
                    <div class="about-feature-two col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="300ms">
							<div class="image-layer lazy-image"><img src="{{asset('assets/images/big_image.jpg')}}" alt=""></div>
                            <div class="text" style="padding-top: 200px;">My Site is my about book.If you want to read then click on read more.</div>

                        </div>
                    </div>
                    <!--About Feature-->
                    <div class="about-feature-two col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="600ms">
                            <div class="image-layer lazy-image"><img src="{{asset('assets/images/big_image.jpg')}}" alt=""></div>
                            <div class="text" style="padding-top: 200px;">If you want to contact with me then send me a message with your details.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container"  id="aboutus">
        <div class="auto-container">
        	<div class="row clearfix">
            	<!--Left Column-->
                <div class="left-column col-lg-6 col-md-12 col-sm-12">
                	<div class="inner">
                    	<div class="sec-title">
                        	<div class="sub-title" id="aboutus"><h3>About Us</h3></div>
                            <h2>{{$about->title}}</h2> <br> <h3>{{$about->sub_title}}</h3>
                            <div class="text" style="text-align: justify; text-justify: inter-word">{{$about->description}}</div>
                        </div>
                    </div>
                </div>
                <!--Right Column-->
                <div class="right-column col-lg-6 col-md-12 col-sm-12">
                	<div class="inner">
                          <img class="card-img-top" src="{{url($about->about_img)}}" alt="Card image cap" style="max-height: 350px;max-width: 500px; border-radius: 5%;">
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>

    <!--Contact Section-->
    <section class="contact-section" id="contact">
        <div class="outer-container clearfix">
            <div class="form-column clearfix">
                <div class="inner clearfix">
                    <div class="sec-title centered">
                        <div class="sub-title"><h3>Inquiry</h3></div>
                        <h2>Leave a Message</h2>
                    </div>
                    <!-- Contact Form-->
                    <div class="contact-form mt-5">
                        <form method="POST" action="{{route('contact.store')}}" id="contact-form">
                            @csrf
                            <div class="row clearfix">
                                <div class="col-md-6 col-sm-12 form-group">
                                    <input type="text" name="name" placeholder="Your name" required="required">
                                </div>
                                <div class="col-md-6 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="Your Email" required="required">
                                </div>
                                <div class="col-md-6 col-sm-12 form-group">
                                    <input type="tel" name="phone" placeholder="Your Phone" required="required">
                                </div>
                                <div class="col-md-6 col-sm-12 form-group">
                                    <input type="text" name="subject" placeholder="Your subject" required="required">
                                </div>
                                <div class="col-md-12 col-sm-12 mt-3 form-group">
                                    <textarea name="message" placeholder="Write your message"></textarea>
                                </div>
                                <div class="col-md-12 col-sm-12 form-group text-center">
                                    <div id="success"> @include('alert.messages') </div>
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="btn-title">Send Message</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<!-- Main Footer -->
    <footer class="main-footer">
    	<div class="auto-container">
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">

                    <!--Column-->
                    <div class="column col-lg-3 col-md-6 col-sm-12">
						<div class="footer-widget logo-widget">
                        	<div class="widget-content">
                                <div class="footer-logo">
                                    <a href="{{route('home')}}" title=""><img src="{{$main->logo_img}}" alt="" title="" style="max-height: 70px; max-width: 70px; border-radius: 20%"></a>
                                </div>
                                <div class="text">{{$about->description}}</div>
                                <ul class="social-links clearfix">
                                    <li><a href="https://twitter.com/arnillashraf?lang=en" target="_blank"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="https://www.facebook.com/ArnillAshraf/" target="_blank"><span class="fab fa-facebook-square"></span></a></li>
                                    <li><a href="https://www.instagram.com/arnill_ashraf"  target="_blank"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="https://www.linkedin.com/in/arnillashraf"  target="_blank"><span class="fab fa-linkedin-in"></span></a></li>
                                </ul>
                            </div>
						</div>
					</div>
					<!--Column-->
                    <div class="column col-lg-3 col-md-6 col-sm-12">
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
                    <div class="column col-lg-3 col-md-6 col-sm-12">
						<div class="footer-widget info-widget">
							<div class="widget-content">
								<h3>Contacts</h3>
								<ul class="contact-info">
                                	<li>Mirpur DOHS, Dhaka,Bangladesh</li></ul>
							</div>
						</div>
					</div>

                    <!--Column-->
                    <div class="column col-lg-3 col-md-6 col-sm-12">
						<div class="footer-widget news-widget">
							<div class="widget-content">
								<h3>Notices</h3>
                                <!--News Post-->
                                    @foreach($notices as $notice)
                                        <div class="news-post">
                                            <div class="post-thumb"><a href="{{route('notice')}}"><img class="lazy-image" src="{{url($notice->small_image)}}"></a></div>
                                            <h5><a href="{{route('notice')}}"> {{$notice->title}}</a></h5>
                                            <div class="date">{{$notice->created_at->format('d M')}}</div>
                                        </div>
                                    @endforeach
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
                    {{--Developed by Farhad Rahman--}}
				</div>
			</div>
		</div>

	</footer>

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
</body>
</html>
