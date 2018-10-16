<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;

class AdminController extends Controller {
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct() {
    $this->middleware('auth:admin');
  }

  protected function guard() {
    return Auth::guard('admin');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index() {
    return view('admin-home');
  }

  public function submitQuiz(Request $request){
   try{
     $this->validate($request, [
       'json'=>'required|file',
       'datetime' => 'date_format:d-m-Y H:i'
     ]);
     $json = json_decode(File::get($request->file('json')->getRealPath()));


     Session::flash('status', 'Successfully imported');
   }catch(ValidationException $e){
     Session::flash('status', 'problem with data, please check');
   }

   redirect('admin.dashboard');
  }
}
