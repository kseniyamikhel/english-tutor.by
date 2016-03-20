<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AudioController extends Controller
{
    public function index(){
        return view('site.audio');
    }
}
