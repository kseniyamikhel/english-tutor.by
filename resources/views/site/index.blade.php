@extends('layouts.wrap')
@section('content')

    <section id="video-wrap" class="fallback-image">
        <div class="parallax-overlay"></div>
        <a id="video" class="player" data-property="{videoURL:'https://youtu.be/Ui4jXRlkpr0?list=PLHSpx_10lbS23KED_9tBfTf5Wru93WVtG',containment:'#video-wrap', showControls:true, autoPlay:true, loop:true, mute:true, startAt:0, opacity:1, quality:'default'}"></a>
        <div class="video-wrap-content text-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <h1>You are welcome!</h1>
                        <p>
                            Let's start and do our best to learn English in perfect way!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="intro-text">
        <div class="container ">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <h2 class="wow animated fadeInDown">I am your <span class="colored-text">English Tutor</span></h2>
                    <p class="lead animated fadeIn">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo. vamus suscipit molestie vestibulum.
                    </p>
                    <div class="divide30"></div>
                    <a href="#" class=" btn border-theme btn-lg">More about me</a>
                </div>
            </div>
        </div>
    </section>

    <section class="services-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="center-heading">
                        <h2>What I Offer</h2>
                        <span class="center-line"></span>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-4 col-sm-6 margin20">
                    <div class="services-box wow animated fadeInUp" data-wow-duration="700ms" data-wow-delay="100ms">
                        <div class="services-box-icon">
                            <i class="fa fa-pencil"></i>
                        </div>
                        <div class="services-box-info">
                            <h4>Web &AMP; Graphics Design</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing metus. elit. Quisque rutrum pellentesque imperdiet.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 margin20">
                    <div class="services-box wow animated fadeInUp" data-wow-duration="700ms" data-wow-delay="200ms">
                        <div class="services-box-icon">
                            <i class="fa fa-globe"></i>
                        </div>
                        <div class="services-box-info">
                            <h4>Web Development</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing metus. elit. Quisque rutrum pellentesque imperdiet.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 margin20">
                    <div class="services-box wow animated fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
                        <div class="services-box-icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <div class="services-box-info">
                            <h4>Customer Support</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing metus. elit. Quisque rutrum pellentesque imperdiet.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 margin20">
                    <div class="services-box wow animated fadeInUp" data-wow-duration="700ms" data-wow-delay="400ms">
                        <div class="services-box-icon">
                            <i class="fa fa-crop"></i>
                        </div>
                        <div class="services-box-info">
                            <h4>Pixel perfect design</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing metus. elit. Quisque rutrum pellentesque imperdiet.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 margin20">
                    <div class="services-box wow animated fadeInUp" data-wow-duration="700ms" data-wow-delay="500ms">
                        <div class="services-box-icon">
                            <i class="fa fa-twitter"></i>
                        </div>
                        <div class="services-box-info">
                            <h4>BOOTSTRAP 3.3.6</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing metus. elit. Quisque rutrum pellentesque imperdiet.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 margin20">
                    <div class="services-box wow animated fadeInUp" data-wow-duration="700ms" data-wow-delay="600ms">
                        <div class="services-box-icon">
                            <i class="fa fa-flag"></i>
                        </div>
                        <div class="services-box-info">
                            <h4>Font Awesome icons</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing metus. elit. Quisque rutrum pellentesque imperdiet.

                            </p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="divide40"></div>

    <section class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="center-heading">
                        <h2>Recent photos</h2>
                        <span class="center-line"></span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div id="work-carousel" class="owl-carousel owl-spaced">

                        @foreach($albums as $album)
                            <div>
                                <div class="item-img-wrap ">
                                    <img src="{!! $album['wrap_image'] !!}" class="img-responsive" alt="workimg">
                                    <div class="item-img-overlay">
                                        <a href="{!! $album['wrap_image'] !!}" class="show-image">
                                            <span></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="work-desc">
                                    <h3><a href="portfolio-single.html">{!! $album['title'] !!}</a></h3>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>

            <div class="divide30"></div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="{{ route('albums') }}" class="btn border-theme btn-lg wow animated fadeInUp"><i class="fa fa-bars"></i> All Photos</a>
                </div>
            </div>
        </div>
    </section>

    <div class="divide80"></div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 margin40">
                <h3 class="heading">Latest News</h3>
                <div id="news-carousel" class="owl-carousel owl-spaced">

                    @foreach($news as $newsItem)
                        <div>
                            <a href="{{ route('singleNews', $newsItem->slug) }}">
                                <div class="item-img-wrap">
                                    <img src="{!! asset($newsItem['image']) !!}" class="img-responsive" alt="workimg">
                                    <div class="item-img-overlay">
                                        <span></span>
                                    </div>
                                </div>
                            </a>
                            <div class="news-desc">
                                <span>{!! $newsItem['published_at'] !!}</span>
                                <span>Sports</span>
                                <h4><a href="{{ route('singleNews', $newsItem->slug) }}">{!! $newsItem['title'] !!}</a></h4>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    <div class="divide60"></div>
@stop