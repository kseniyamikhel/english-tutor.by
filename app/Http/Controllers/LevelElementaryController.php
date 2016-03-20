<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LevelElementaryController extends Controller
{
    public function index(){
        return view('site.levelElementary');
    }
}
