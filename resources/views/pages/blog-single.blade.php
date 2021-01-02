@extends('layouts.without_index_layout')
@section('content')

    <!-- Page Banner Section -->
    <section class="page-banner">
        <div class="image-layer lazy-image"><img src="{{asset('assets/images/big_image.jpg')}}" alt="" style="height: 100%; width: 100%;"></div>
        <div class="bottom-rotten-curve" style="background: url({{asset('assets/images/background/rotten-curve-5.png')}})"></div>
        <div class="auto-container">
            <h1>Blog Details</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">Blog Details</li>
            </ul>
        </div>
    </section>
    <!--End Banner Section -->

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Content Side / Blog Sidebar-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <!--Blog Posts-->
                    <div class="blog-post-detail">
                        <div class="inner">
                            <h2>{{$blog->title}}</h2>
                            <div class="content">
                                <p class="big-text">{{$blog->description}}</p>
                                <br>
                                <figure class="image"><img class="lazy-image" src="{{url($blog->big_image)}}" alt=""></figure>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar">
                        <!-- Post Widget -->
                        <div class="sidebar-widget popular-posts">
                            <h3 class="sidebar-title">Latest News</h3>
                                    @foreach($notices as $notice)
                                        <div class="news-post">
                                            <div class="post-thumb"><a href="#"><img class="lazy-image" src="{{url($notice->small_image)}}"></a></div>
                                            <h5><a href="#"> {{$notice->title}}</a></h5>
                                            <div class="date">{{$notice->created_at->format('d M')}}</div>
                                        </div>
                                    @endforeach
                        </div>
                    </aside>
                </div>
                <!-- Comments Area -->
                <div class="comments-area">
                    <div class="group-title"><h3>Comments</h3></div>
                    <div class="comment-box">
                        <div id="disqus_thread"></div>
                        <script>
                            /**
                             *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                             *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                            (function() { // DON'T EDIT BELOW THIS LINE
                                var d = document, s = d.createElement('script');
                                s.src = 'https://arnillashraf.disqus.com/embed.js';
                                s.setAttribute('data-timestamp', +new Date());
                                (d.head || d.body).appendChild(s);
                            })();
                        </script>
                    </div>
                </div>
                <div class="background">
                    <div style="text-align: center;">
                        <button class="clipboard">Copy Url</button>
                        <p>Have you already clicked?</p>
                    </div>
                </div>
        </div>
    </div>
    </div>
    <!-- End Sidebar Page Container -->

        <!--Comment Form-->
        <div class="comment-form default-form col-lg-6 col-md-12 col-sm-12 offset-3">
            <div class="group-title"><h4>Leave a Comment</h4></div>

            <form method="POST" action="{{route('contact.store')}}" id="contact-form">
                @csrf
                <div class="row clearfix">
                    <div class="col-md-4 col-sm-12 form-group">
                        <input type="text" name="name" placeholder="Your name" required="required">
                    </div>
                    <div class="col-md-4 col-sm-12 form-group">
                        <input type="email" name="email" placeholder="Your Email" required="required">
                    </div>

                    <div class="col-md-4 col-sm-12 form-group">
                        <input type="tel" name="phone" placeholder="Your Phone" required="required">
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
    <script id="dsq-count-scr" src="//arnillashraf.disqus.com/count.js" async></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        var $temp = $("<input>");
        var $url = $(location).attr('href');

        $('.clipboard').on('click', function() {
            $("body").append($temp);
            $temp.val($url).select();
            document.execCommand("copy");
            $temp.remove();
            $("p").text("URL copied!");
        })
    </script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5fec347a45d609ed"></script>
@endsection
