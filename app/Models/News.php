<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class News extends Model
{
    protected $fillable = ['slug', 'image', 'title', 'excerpt', 'content', 'published_at'];

    public function getNews(){
        $news = $this->latest('published_at')->get();
        return $news;
    }

    public function showNewsContent($slug){
        $news = $this->where('slug', '=', $slug)->get();
        return $news;
    }
}
