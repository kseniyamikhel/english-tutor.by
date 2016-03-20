<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = ['slug', 'title', 'wrap_image', 'published_at'];

    public function getAlbums(){
        $albums = $this->get();
        return ($albums);
    }
}
