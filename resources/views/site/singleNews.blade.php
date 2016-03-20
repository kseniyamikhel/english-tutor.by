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
                            {{--<li><i class="fa fa-comment"></i>6 Comments</li>--}}
                        </ul>
                        <h2>{{ $newsItem['title'] }}</h2>
                        <p>{{ $newsItem['content'] }}</p>
                    </div>
                @endforeach

                {{--<div class="comment-post">
                    <h3>3 Comments</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="comment-list">
                                <h4><img src="{{ asset('img/team-2.jpg') }}" class="img-responsive" alt="">
                                    by User <a href="#" class="btn btn-xs btn-theme-dark">Reply</a>
                                </h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie
                                </p>
                            </div><!--comments list-->
                        </div>
                        <div class="col-md-10 col-md-offset-1">
                            <div class="comment-list">
                                <h4><img src="{{ asset('img/team-3.jpg') }}" class="img-responsive" alt="">
                                    by User <a href="#" class="btn btn-xs btn-theme-dark">Reply</a>
                                </h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie
                                </p>
                            </div><!--comments list-->
                        </div>
                        <div class="col-md-12">
                            <div class="comment-list">
                                <h4><img src="{{ asset('img/team-4.jpg') }}" class="img-responsive" alt="">
                                    by User <a href="#" class="btn btn-xs btn-theme-dark">Reply</a>
                                </h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie
                                </p>
                            </div><!--comments list-->
                        </div>
                    </div>
                </div><!--comments-->--}}

                <ul class="pager">
                    <li class="previous"><a href="{{ route('news') }}">&larr; Back</a></li>
                    {{--<li class="next"><a href="#">Next Page &rarr;</a></li>--}}
                </ul>

                <div class="divide60"></div>

                {{--<div class="comment-form">
                    <h3>Leave Comment</h3>
                    <div class="form-contact">
                        <form role="form">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="email" class="form-control" id="name" required="">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="password" class="form-control" id="email" required="">
                            </div>
                            <div class="form-group">
                                <label for="message">Comment</label>
                                <textarea class="form-control" rows="7" id="message" required=""></textarea>
                            </div>
                            <button type="submit" class="btn btn-theme-bg btn-lg pull-right">Comment</button>
                        </form>
                    </div>
                </div>--}}
            </div>
        </div>
    </div>

    <div class="divide60"></div>
@stop