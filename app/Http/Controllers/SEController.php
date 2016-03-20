<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SEController extends Controller
{
    public function beginner(){
        return view('site.seBeginner');
    }

    public function elementary(){
        return view('site.seElementary');
    }

    public function intermidiate(){
        return view('site.seIntermidiate');
    }
}
