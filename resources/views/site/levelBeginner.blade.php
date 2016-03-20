@extends('layouts.wrap')
@section('content')

    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h4>Beginner Level</h4>
                </div>
                <div class="col-sm-6 hidden-xs text-right">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('main') }}">Home</a></li>
                        <li>Beginner Level</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="divide80"></div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 margin20">
                <h3 class="heading">Better Services Provide by us</h3>
                <p>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni. Dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum
                </p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('img/showcase-1.jpg') }}" class="img-responsive" alt="">
            </div>
        </div>
    </div>

    <div class="divide60"></div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="heading">Parts</h3>
            </div>
        </div>
        <div class="row special-feature">

            <div class="col-md-3 col-sm-6 margin20">
                <div class="s-feature-box text-center">
                    <div class="mask-top">
                        <i class="fa fa-comments-o"></i>
                        <h4>Pronunciation</h4>
                    </div>
                    <a href="#">
                        <div class="mask-bottom">
                            <i class="fa fa-comments-o"></i>
                            <h4>Pronunciation</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec odio ipsum. Suspendisse cursus malesuada facilisis.</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 margin20">
                <div class="s-feature-box text-center">
                    <div class="mask-top">
                        <i class="fa fa-book"></i>
                        <h4>Grammar</h4>
                    </div>
                    <a href="#">
                        <div class="mask-bottom">
                            <i class="fa fa-book"></i>
                            <h4>Grammar</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec odio ipsum. Suspendisse cursus malesuada facilisis.</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 margin20">
                <div class="s-feature-box text-center">
                    <div class="mask-top">
                        <i class="fa fa-youtube-play"></i>
                        <h4>Video</h4>
                    </div>
                    <a href="{{ route('video') }}">
                        <div class="mask-bottom">
                            <i class="fa fa-youtube-play"></i>
                            <h4>Video</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec odio ipsum. Suspendisse cursus malesuada facilisis.</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 margin20">
                <div class="s-feature-box text-center">
                    <div class="mask-top">
                        <i class="fa fa-volume-up"></i>
                        <h4>Audio</h4>
                    </div>
                    <a href="{{ route('audio') }}">
                        <div class="mask-bottom">
                            <i class="fa fa-volume-up"></i>
                            <h4>Audio</h4>
                            <p>Assan Release the updates time to time. more big updates are coming in future. keep in touch and and enjoy all updates free of cost. </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </div>

    <div class="divide60"></div>

@stop
