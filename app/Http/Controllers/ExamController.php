<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExamController extends Controller {
  public $successStatus=200;

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    return view('home');
  }

  public function getQuiz(Request $request)
  {
  }

  public function submitAnswer(Question $question)
  {

  }

  public function getStatus(Request $request)
  {
  }

  public function getPaper()
  {
    return response()->json([
      'levels'    =>0,
      'max_time'  =>0,
      'id'        =>0,
      'start_time'=>0,
    ]);
  }

  public function getStats()
  {
    return response()->json([ 'correct'=>0, 'wrong'=>0 ]);
  }

  public function getQuestion()
  {

  }

  public function submitQuestion(Question $q)
  {

  }

}
