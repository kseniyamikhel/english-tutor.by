@extends('layouts.wrap')
@section('content')
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h4>Video</h4>
                </div>
                <div class="col-sm-6 hidden-xs text-right">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('main') }}">Home</a></li>
                        <li>Material</li>
                        <li>Video</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="divide80"></div>

    <div class="container">
        <div class="row">
            <div class="col-md-9">

                @foreach($video as $videoItem)
                    <h4>{!! $videoItem['title'] !!}</h4>

                    <div class="row">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="{{ asset($videoItem['src']) }}"></iframe>
                        </div>
                        <ul class="list-inline post-detail">
                            <li><i class="fa fa-calendar"></i>{!! $videoItem['published_at'] !!}</li>
                            <li><i class="fa fa-tag"></i> <a href="#">Sports</a></li>
                        </ul>
                        <span>{!! $videoItem['description'] !!}</span>
                    </div>
                    <div class="divide60"></div>
                @endforeach

                <ul class="pager">
                    <li class="previous"><a href="#">&larr; Previous Page</a></li>
                    <li class="next"><a href="#">Next Page &rarr;</a></li>
                </ul>

            </div>

            <div class="col-md-2 col-md-offset-1">

                <div class="sidebar-box margin40">
                    <h4>Categories</h4>
                    <ul class="list-unstyled cat-list">
                        <li> <a href="#">Beginner</a> <i class="fa fa-angle-right"></i></li>
                        <li> <a href="#">Elementary</a> <i class="fa fa-angle-right"></i></li>
                        <li> <a href="#">Intermidiate</a> <i class="fa fa-angle-right"></i></li>
                    </ul>
                </div>

                <div class="sidebar-box margin40">
                    <h4>Tag Cloud</h4>

                    {{--<div id="filters-container" class="cbp-l-filters-button">
                        <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
                            All <div class="cbp-filter-counter"></div>
                        </div>
                        <div data-filter=".identity" class="cbp-filter-item">
                            Identity <div class="cbp-filter-counter"></div>
                        </div>
                        <div data-filter=".web-design" class="cbp-filter-item">
                            Web Design <div class="cbp-filter-counter"></div>
                        </div>
                        <div data-filter=".graphic" class="cbp-filter-item">
                            Graphic <div class="cbp-filter-counter"></div>
                        </div>
                        <div data-filter=".logos" class="cbp-filter-item">
                            Logo <div class="cbp-filter-counter"></div>
                        </div>
                    </div>--}}

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