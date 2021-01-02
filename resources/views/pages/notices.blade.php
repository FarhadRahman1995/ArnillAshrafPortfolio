@extends('layouts.without_index_layout')
@section('content')

    <!-- Page Banner Section -->
    <section class="page-banner">
        <div class="image-layer lazy-image"><img src="{{asset('assets/images/big_image.jpg')}}" alt="" style="height: 100%; width: 100%;"></div>
        <div class="bottom-rotten-curve" style="background: url({{asset('assets/images/background/rotten-curve-5.png')}})"></div>
        <div class="auto-container">
            <h1>Notices</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">Noticess</li>
            </ul>
        </div>
    </section>
    <!--End Banner Section -->

    <!--Events Section-->
    <section class="events-section">
        <div class="auto-container">
        	<div class="row clearfix">
            @if(count($notices) >0)
                @foreach($notices as $notice)
                        <!--Event Block-->
                            <div class="event-block-three col-lg-4 col-md-6 col-sm-12">
                                <div class="inner-box wow fadeInUp" data-wow-delay="300ms">
                                    <div class="image-box">
                                        <figure class="image"><a href="{{route('notice-single', ['id'=>$notice->id])}}"><img class="lazy-image" src="{{$notice->small_image}}"></a></figure>
                                        <div class="date">{{$notice->created_at->format('d')}} <span class="month">{{$notice->created_at->format('M')}}</span></div>
                                    </div>
                                    <div class="lower-content">
                                        <h3><a href="{{route('notice-single', ['id'=>$notice->id])}}">{{Str::limit(strip_tags($notice->title),20)}}</a></h3>
                                        <ul class="info clearfix">
                                            <li><span class="icon far fa-clock"></span>Created at: {{$notice->created_at/*->toDateString()*/}}</li>
                                        </ul>
                                        <div class="link-box"><a href="{{route('notice-single', ['id'=>$notice->id])}}" class="theme-btn btn-style-two"><span class="btn-title">Read More</span></a></div>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <span style="display: table; margin: 0 auto;">
        {{$notices->links()}}
    </span>

@endsection
