<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LevelBeginnerController extends Controller
{
    public function index(){
        return view('site.levelBeginner');
    }

    public function pronunciation(){
        return view('site.pronunciation');
    }

    public function grammar(){

    }
}
