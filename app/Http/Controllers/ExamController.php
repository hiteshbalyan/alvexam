<?php
namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class ExamController extends Controller
{
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

}
