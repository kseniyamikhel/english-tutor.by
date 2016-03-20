@extends('layouts.wrap')
@section('content')

    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h4>Photos</h4>
                </div>
                <div class="col-sm-6 hidden-xs text-right">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('main') }}">Home</a></li>
                        <li>Photos</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="divide80"></div>

    <div class="container">
        <div class="row">
            @foreach($albums as $album)
                <div class="mix col-sm-4 margin30 ">
                    <div class="item-img-wrap ">
                        <img src="{{ asset($album['wrap_image']) }}" class="img-responsive" alt="workimg">
                        <a href="#">
                            <div class="item-img-overlay">
                                <span></span>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <h6>{!! $album['title'] !!}</h6>
                        </a>
                    </div>
                </div>
            @endforeach
            {{--<div class="mix col-sm-4 margin30 ">
                <div class="item-img-wrap ">
                    <img src="{{ asset('img/img-6.jpg') }}" class="img-responsive" alt="workimg">
                    <a href="#">
                        <div class="item-img-overlay">
                            <span></span>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <h6>Hello</h6>
                    </a>
                </div>
            </div>

            <div class="mix col-sm-4 margin30 ">
                <div class="item-img-wrap ">
                    <img src="{{ asset('img/img-6.jpg') }}" class="img-responsive" alt="workimg">
                    <a href="#">
                        <div class="item-img-overlay">
                            <span></span>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <h6>Hello</h6>
                    </a>
                </div>
            </div>

            <div class="mix col-sm-4 margin30 ">
                <div class="item-img-wrap ">
                    <img src="{{ asset('img/img-6.jpg') }}" class="img-responsive" alt="workimg">
                    <a href="#">
                        <div class="item-img-overlay">
                            <span></span>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <h6>Hello</h6>
                    </a>
                </div>
            </div>

            <div class="mix col-sm-4 margin30 ">
                <div class="item-img-wrap ">
                    <img src="{{ asset('img/img-6.jpg') }}" class="img-responsive" alt="workimg">
                    <a href="#">
                        <div class="item-img-overlay">
                            <span></span>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <h6>Hello</h6>
                    </a>
                </div>
            </div>

            <div class="mix col-sm-4 margin30 ">
                <div class="item-img-wrap ">
                    <img src="{{ asset('img/img-6.jpg') }}" class="img-responsive" alt="workimg">
                    <a href="#">
                        <div class="item-img-overlay">
                            <span></span>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <h6>Hello</h6>
                    </a>
                </div>
            </div>

            <div class="mix col-sm-4 margin30 ">
                <div class="item-img-wrap ">
                    <img src="{{ asset('img/img-6.jpg') }}" class="img-responsive" alt="workimg">
                    <a href="#">
                        <div class="item-img-overlay">
                            <span></span>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <h6>Hello</h6>
                    </a>
                </div>
            </div>--}}


        </div>

    </div>

    <div class="divide60"></div>

@stop