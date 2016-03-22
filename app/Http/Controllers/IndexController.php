<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\News;

class IndexController extends Controller
{
    public function index(News $newsModel, Album $albumModel){
        $news = $newsModel->getNews();
        $albums = $albumModel->getAlbums();
        return view('site.index', ['news' => $news, 'albums' => $albums]);
    }
}