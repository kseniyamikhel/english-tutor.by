<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Http\Requests;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function index(){
        return view('site.admin');
    }
    public function showFormNews(){
        return view('site.createNews');
    }
    public function createNews(Request $request, News $newsModel){
        $title = $request->input('title');
        $slug = $request->input('slug');
        $excerpt = $request->input('excerpt');
        $content = $request->input('content');

        $destinationPath = public_path('img');
        $image = $request->file('image');
        $imageInside = $request->file('image_inside');
        $imageName = $image->getClientOriginalName();
        $imageInsideName = $imageInside->getClientOriginalName();
        $image->move($destinationPath, $imageName);
        $imageInside->move($destinationPath, $imageInsideName);

        $newsModel = new $newsModel();
        $newsModel->title = $title;
        $newsModel->slug = $slug;
        $newsModel->excerpt = $excerpt;
        $newsModel->content = $content;
        $newsModel->image = 'img/' . $imageName;
        $newsModel->image_inside = 'img/' . $imageInsideName;
        $newsModel->published_at = Carbon::now();
        $newsModel->save();
        return redirect()->route('news');
    }
}
