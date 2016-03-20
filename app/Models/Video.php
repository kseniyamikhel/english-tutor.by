<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Video extends Model
{
    protected $fillable = ['title', 'description', 'src', 'published_at'];

    public function getVideos(){
        $videos = $this->latest('published_at')->get();
        return $videos;
    }

}
