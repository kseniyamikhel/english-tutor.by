<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Http\Requests;

class AlbumController extends Controller
{
    public function index(Album $albumModel){
        $albums = $albumModel->getAlbums();
        return view('site.albums', ['albums' => $albums]);
    }
}
