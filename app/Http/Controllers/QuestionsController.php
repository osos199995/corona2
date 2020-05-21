<?php

namespace App\Http\Controllers;

use App\questions;
use App\state;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class QuestionsController extends Controller
{
//    public function show($id){
//    $question=questions::find($id.+1);
//        return view('questions',compact('question'));
//    }

    public function Answers(Request $request,$id){

           $request->validate([
           'answer'=>'required',
        ]);
          $question=questions::find($id);
          if ($request->answer == $question->true_answer){
              $state=State::where('user_name',Session::get('user_name'))->first();

             $state->update([
                'state'=>$state->state +1,
                'count'=>$state->count +1,
             ]);
              $question=questions::find($id +1);
              Session::flash('success','ممتاز اجابتك السابقة صحيحة');
              return view('questions',compact('question','state'));
          }else{
              $state=state::where('user_name',Session::get('user_name'))->first();

              $state->update([
                  'state'=>$state->state +1,

              ]);
              Session::flash('danger','     اجابتك السابقة خاطئة الاجابة الصحيحة هى '  .$question->true_answer);
              $question=questions::find($id +1);
              return view('questions',compact('question','state'));
          }




    }


    public function show2( Request $request,$id){
        $request->validate([
            'answer'=>'required',
        ]);
        $question=questions::find($id+1);
        return view('questions',compact('question'));
    }




    public function start(Request $request){
        $request->validate([
            'user_name'=>'required|unique:states',

        ]);

        $question=questions::find(1);

        $state=state::create([
            'user_name'=>$request->user_name
        ]);
        Session::put('user_name', $request->user_name);
        return view('questions',compact('question'));
    }

    public function End(){
        $state=state::where('user_name',Session::get('user_name'))->first();
        $state->delete();
        return redirect('/');
    }
}
