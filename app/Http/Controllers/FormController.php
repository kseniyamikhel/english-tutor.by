<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Http\Requests;
use Mail;
use Mockery\CountValidator\Exception;

class FormController extends Controller
{
    public function index(Question $questionModel, Request $request){
        try {
            $email = $request->input('email');
            $question = $request->input('question');
            if (empty($email)) throw new Exception('Field "email" must not be empty');
            if (empty($question)) throw new Exception('Field "question" must not be empty');
            $questionModel->create($request->all());
            return response()->json(["message" => "Your message successfully sent"]);
            /*$recipient = 'kseniyamikhel@inbox.ru';
            Mail::send('site.email', ['email' => $request['email'], 'question' => $request['question']], function($m) use ($recipient){
                $m->from('us@example.com', 'Laravel');
                $m->to($recipient)->subject('Question from site');
            });*/
        } catch (\Exception $e) {
            return response()->json(["message" => $e->getMessage()], 400);
        }

    }
}
