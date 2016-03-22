@extends('layouts.wrap')
@section('content')

    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h4>Intermediate Level</h4>
                </div>
                <div class="col-sm-6 hidden-xs text-right">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('main') }}">Home</a></li>
                        <li>Intermediate Level</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="divide80"></div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 margin20">
                <h3 class="heading">Intermediate</h3>
                <p>
                    You can communicate freely and even speak with some confidence. You know some vocabulary and grammr and use your knowledge while writing or speaking but you still make some mistakes. You can read texts, if they are specialized you use dictionary. You can write using complicated grammar structures.
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

            <div class="col-md-4 margin20">
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

            <div class="col-md-4 margin20">
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

            <div class="col-md-4 margin20">
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
