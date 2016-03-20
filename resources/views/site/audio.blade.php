@extends('layouts.wrap')
@section('content')
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h4>Audio</h4>
                </div>
                <div class="col-sm-6 hidden-xs text-right">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('main') }}">Home</a></li>
                        <li>Material</li>
                        <li>Audio</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="divide80"></div>

    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <div class="blog-post">

                    <iframe height="170" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/62974792&amp;color=ff6600&amp;auto_play=false&amp;show_artwork=true"></iframe>
                    <div class="divide20"></div>
                    <iframe frameborder="0" style="border:none;width:600px;height:100px;" width="600" height="100" src="https://music.yandex.by/iframe/#track/4218211/477853">—лушайте <a href='https://music.yandex.by/album/477853/track/4218211'>Little Time Bomb</a> Ч <a href='https://music.yandex.by/artist/6934'>Golden Earring</a> на яндекс.ћузыке</iframe>

                    <ul class="list-inline post-detail">
                        <li><i class="fa fa-calendar"></i> 31st july 2014</li>
                        <li><i class="fa fa-tag"></i> <a href="#">Sports</a></li>
                    </ul>

                </div>

                <ul class="pager">
                    <li class="previous"><a href="#">&larr; Previous Page</a></li>
                    <li class="next"><a href="#">Next Page &rarr;</a></li>
                </ul>

            </div>

            <div class="col-md-3 col-md-offset-1">

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