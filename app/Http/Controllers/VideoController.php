<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Http\Requests;

class VideoController extends Controller
{
    public function index(Video $videoModel){
        $video = $videoModel->getVideos();
        return view('site.video', ['video' => $video]);
    }

}
