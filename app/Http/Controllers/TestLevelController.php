<?php

namespace App\Http\Controllers;

use App\Models\TestQuestion;
use Hamcrest\Core\IsNull;
use Illuminate\Http\Request;
use App\Models\Answer;
use App\Http\Requests;

class TestLevelController extends Controller
{
    public function index(TestQuestion $testQuestionModel){
        $question = $testQuestionModel;
        return view('site.testLevel', ['question' =>$question]);
    }

    public function question(Request $request, Answer $answerModel, TestQuestion $testQuestionModel, $id){
        $sessionId = $request->session()->getId();
        $lastAnswer = $answerModel::where('session_id', $sessionId)->get()->last();//->id_question;
        if($lastAnswer) $lastAnswerQuestionId = $lastAnswer->id_question;
        else $lastAnswerQuestionId = 0;
        $lastQuestionId = $testQuestionModel::all()->last()->id;

        if ($lastAnswerQuestionId == $lastQuestionId) return redirect()->route('result');
        else {
            $lastAnswerQuestionId++;
            if ($id == $lastAnswerQuestionId) {
                $question = $testQuestionModel->getQuestion($id);

                return view('site.question', ['question' =>$question]);
            } else return redirect()->route('question', ["id" => $lastAnswerQuestionId]);
        }
    }

    public function answer(TestQuestion $testQuestionModel, Answer $answerModel, Request $request, $questionId){
        $answ = $request->input('answer');
        $session_id = $request->session()->getId();
        $oldAnswer = $answerModel::where('session_id', $session_id)->where('id_question', $questionId)->first();
        if ($oldAnswer) {
            return redirect()->route('question', ['id' => $questionId + 1]);
        }
        $answer = new $answerModel();
        $answer->id_question = $questionId;
        $answer->answer = $answ;
        $answer->session_id = $session_id;
        $question = $testQuestionModel->find($questionId);
        if($request->input('answer') === $question->right_option){
            $answer->right_answer = true;
        }else{
            $answer->right_answer = false;
        }
        $answer->save();
        $lastQuestion = $testQuestionModel::all()->last();
        if($questionId == $lastQuestion->id) {
            return redirect()->route('result');
        } else {
            return redirect()->route('question', ['id' => $questionId + 1]);
        }
    }

    public function result(Answer $answerModel, Request $request, TestQuestion $testQuestionModel){
        $lastQuestionId = $testQuestionModel::all()->last()->id;
        $sessionId = $request->session()->getId();
        $countRightAnswers = $answerModel::where('session_id', $sessionId)->where('right_answer', true)->count();
        if($countRightAnswers < 10){
            $level = 'Beginner';
            $href = route('levelBeginner');
        }elseif($countRightAnswers >= 10 &&  $countRightAnswers < 20){
            $level = 'Elementary';
            $href = route('levelElementary');
        }else{
            $level = 'Intermediate';
            $href = route('levelIntermidiate');
        }
        return view('site.result', ['countRightAnswers' => $countRightAnswers, 'lastQuestionId' => $lastQuestionId, 'level' => $level, 'href' => $href]);
    }
}
