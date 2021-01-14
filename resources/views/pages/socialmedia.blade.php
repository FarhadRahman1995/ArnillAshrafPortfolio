@extends('layouts.without_index_layout')
@section('content')

    <!-- Page Banner Section -->
    <section class="page-banner">
        <div class="image-layer lazy-image"><img src="{{asset('assets/images/blog.jpg')}}" alt="" style="height: 100%; width: 100%;"></div>
        <div class="bottom-rotten-curve" style="background: url({{asset('assets/images/background/rotten-curve-5.png')}})"></div>
    </section>
    <!--End Banner Section -->

    <section class="events-section">
        <div class="auto-container">
            <div class="row clearfix">
            @if($socialmedias->count()>0)
               @foreach($socialmedias as $socialmedia)
                    <!--Event Block-->
                        <div class="event-block-three col-lg-6 col-md-8 col-sm-12">
                            <div class="inner-box wow fadeInUp">
                                <iframe src="{{url($socialmedia->iframe)}}" width="800" height="500" style="border:none;overflow:hidden" scrolling="yes" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <span style="display: table; margin: 0 auto;">
        {{$socialmedias->links()}}
    </span>

@endsection
