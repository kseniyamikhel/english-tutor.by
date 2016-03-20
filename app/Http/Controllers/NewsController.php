<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Http\Requests;

class NewsController extends Controller
{
    public function index(News $newsModel){
        $news = $newsModel->getNews();
        return view('site.news', ['news' => $news]);
    }

    public function showSingleNews(News $newsModel, $slug){
        $news = $newsModel->showNewsContent($slug);
        return view('site.singleNews', ['news' => $news]);
    }
}
