<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class TestQuestion extends Model

{
    protected $fillable = ['question', 'option1', 'option2', 'option3', 'right_option'];

    public function getQuestion($id){
        $question = $this->where('id', '=', $id)->get();
        return $question;
    }

    public function setAnswer(Request $request, $id){
        $answer = $request->all();
        return $answer;
    }

}
