@extends('layouts.wrap')
@section('content')
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h4>News</h4>
                </div>
                <div class="col-sm-6 hidden-xs text-right">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('main') }}">Home</a></li>
                        <li>news</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="divide80"></div>

    <div class="container blog-left-img">
        <div class="row">
            <div class="col-md-10">
                @foreach($news as $newsItem)
                    <div class="blog-post">
                        <div class="row">
                            <div class="col-md-6 margin20">
                                <a href="{{ route('singleNews', $newsItem->slug) }}">
                                    <div class="item-img-wrap">
                                        <img src="{{ asset($newsItem['image']) }}" class="img-responsive" alt="workimg">
                                        <div class="item-img-overlay">
                                            <span></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 margin20">
                                <ul class="list-inline post-detail">
                                    <li><i class="fa fa-calendar"></i>{!! $newsItem['published_at'] !!}</li>
                                    <li><i class="fa fa-tag"></i> <a href="#">Sports</a></li>
                                </ul>
                                <h2><a href="{{ route('singleNews', $newsItem->slug) }}">{!! $newsItem['title'] !!}</a></h2>
                                <p>{{ $newsItem['excerpt'] }}</p>
                                <p><a href="{{ route('singleNews', $newsItem->slug) }}" class="btn btn-theme-dark">Read More...</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach

                <ul class="pager">
                    <li class="previous"><a href="#">&larr; Previous Page</a></li>
                    <li class="next"><a href="#">Next Page &rarr;</a></li>
                </ul>
            </div>

            <div class="col-md-2">
                <div class="sidebar-box margin40">
                    <h4>Tag Cloud</h4>
                    <div class="tag-list">
                        <a href="#">Wordpress</a>
                        <a href="#">Design</a>
                        <a href="#">Graphics</a>
                        <a href="#">Seo</a>
                        <a href="#">Development</a>
                        <a href="#">Marketing</a>
                        <a href="#">fashion</a>
                        <a href="#">Media</a>
                        <a href="#">Photoshop</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="divide60"></div>
@stop