<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = ['id_question', 'answer', 'session_id', 'right_answer'];
}

