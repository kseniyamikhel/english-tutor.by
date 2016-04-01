@extends('layouts.wrap')
@section('content')
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h4>Single News</h4>
                </div>
                <div class="col-sm-6 hidden-xs text-right">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('main') }}">Home</a></li>
                        <li>News</li>
                        @foreach($news as $newsItem)
                            <li>{!! $newsItem['title'] !!}</li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="divide80"></div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                @foreach($news as $newsItem)
                    <div class="blog-post">
                        <div>
                            <img src="{{ asset($newsItem['image_inside']) }}" class="img-responsive" alt="workimg">
                        </div>
                        <ul class="list-inline post-detail">
                            <li><i class="fa fa-calendar"></i>{{ $newsItem['published_at'] }}</li>
                            <li><i class="fa fa-tag"></i> <a href="#">Sports</a></li>
                        </ul>
                        <h2>{{ $newsItem['title'] }}</h2>
                        <p>{{ $newsItem['content'] }}</p>
                    </div>
                @endforeach

                <ul class="pager">
                    <li class="previous"><a href="{{ route('news') }}">&larr; Back</a></li>
                </ul>

                <div class="divide60"></div>

            </div>
        </div>
    </div>

    <div class="divide60"></div>
@stop