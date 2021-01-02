@extends('layouts.without_index_layout')
@section('content')

    <!-- Page Banner Section -->
    <section class="page-banner">
        <div class="image-layer lazy-image"><img src="{{asset('assets/images/big_image.jpg')}}" alt="" style="height: 100%; width: 100%;"></div>
        <div class="bottom-rotten-curve" style="background: url({{asset('assets/images/background/rotten-curve-5.png')}})"></div>
        <div class="auto-container">
            <h1>Blog</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">Blog</li>
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
                    <div class="blog-posts">
                        <div class="row clearfix">
                        @if(count($blogs) >0)
                            @foreach($blogs as $blog)
                            <!--News Block-->
                            <div class="news-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><a href="{{route('blog-single', ['id'=>$blog->id])}}"><img class="lazy-image" src="{{$blog->small_image}}" alt=""></a></figure>
                                        <div class="fb-comments" data-width="" data-numposts="5">
                                    </div>
                                        </div>
                                    <div class="lower-content">
                                        <div class="date">{{$blog->created_at->format('d')}} <span class="month">{{$blog->created_at->format('M')}}</span></div>
                                        <h3><a href="{{route('blog-single', ['id'=>$blog->id])}}">{{Str::limit(strip_tags($blog->title),20)}}</a></h3>
                                        <div class="text">{{Str::limit(strip_tags($blog->description),20)}}</div>
                                        <div class="post-meta">
                                            <ul class="clearfix">
                                                <li><a href="{{route('blog-single', ['id'=>$blog->id])}}#disqus_thread"><span class="icon fa fa-comments"></span></a></li>
                                                <li><a href="{{route('blog-single', ['id'=>$blog->id])}}#social-icons"><span class="icon fa fa-share-alt"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                @endforeach
                            @endif

                        </div>
                    </div>

                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12 float-right">
                    <aside class="sidebar">

                        <!-- Post Widget -->
                        <div class="sidebar-widget popular-posts">
                            <h3 class="sidebar-title">Latest News</h3>
                            <div class="widget-content">

                                <!--News Post-->
                                    @foreach($notices as $notice)
                                        <div class="news-post">
                                            <div class="post-thumb"><a href="{{route('notice')}}"><img class="lazy-image" src="{{$notice->small_image}}"></a></div>
                                            <h5><a href="{{route('notice')}}"> {{$notice->title}}</a></h5>
                                            <div class="date">{{$notice->created_at->format('d M')}}</div>
                                        </div>
                                    @endforeach
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>

    </div>
    <!-- End Sidebar Page Container -->

    <span style="display: table; margin: 0 auto;">
        {{$blogs->links()}}
    </span>

@endsection
