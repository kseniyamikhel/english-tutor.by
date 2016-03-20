<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\News;

class IndexController extends Controller
{
    public function index(News $newsModel){
        $news = $newsModel->getNews();
        return view('site.index', ['news' => $news]);
    }
}