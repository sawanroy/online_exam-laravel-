<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Session;
use App\subject;
use App\testname;
use App\question;
use App\answer;

class admincontroller extends Controller
{
    public function login()
    {
    	return view('admin-panel.login');
    }


    public function showusers()
    {
    
    	 $users = DB::select('select * from users');

        return view('admin-panel/tables_dynamic', ['users' => $users]);
    }

    public function add_subject()
    {
    	return view('admin-panel.add_subject');
    }

    public function add_question()
    {
         $testname = DB::select('select * from testnames');
         $subname =DB::select('select * from subjects');
         //$data=$testname->merge($subname);
    	//return view('admin-panel.form',compact($testname,$subname));
        return view('admin-panel.form',['testname'=>$testname,'subname'=>$subname]);
    }
    
    public function Add_test()
    {

    	return view('admin-panel.test_name');
    }

    public function insert_subject(Request $request)
    {
    	$subject = new subject;

        $subject->sname= $request->sname;
        $subject->lang= $request->lang;         
        $subject->save();

          return redirect('/add_subject');
    }

    public function insert_testname(Request $request)
    {
    	$testname = new testname;

        $testname->name= $request->tname;
        $testname->time= $request->time;
        $testname->totalmarks= $request->tmarks;
        $testname->totalquestion= $request->tquest;
        $testname->nmarks= $request->nmarks;
        $testname->pmarks=$request->pmarks;
         
         $testname->save();

          return redirect('/Add_test');
    }

    public function ins_question(Request $request)
    {

    	$question = new question;

        $question->sname= $request->sname;
        $question->tname= $request->tname;
        $question->quest= $request->quest;
        $question->opt1= $request->opt1;
        $question->opt2= $request->opt2;
        $question->opt3= $request->opt3;
        $question->opt4= $request->opt4;
        $question->ans= $request->ans;
         
         $question->save();

          return redirect('/add_question');
    }

    public function test_list()
    {

         $users = DB::select('select * from testnames');

        return view('admin-panel.test_list',['users' => $users]);
    }

    public function ins_ans(Request $request)
    {
        $session=session()->getId();
        $answer = new answer;

        $answer->quest = $request->quest;
        $answer->ans = $request->opt;
        $answer->trueans = $request->trueans;
        $answer->session= $session;
        $answer->save();
        session()->put('id',$request->id);
        return redirect('/nextq');
    }

    public function acc_manage()
    {
        return view('admin-panel.projects');
    }

    public function user_acc(Request $request)
    {
        $test = DB::table('users')->get();
       // $testname = DB::table('testnames')->get(); 
        $testname =DB::select('select * from testnames');       

        Session()->put('test', $test);
        return view('users',['testname'=>$testname]);
    }
    public function nextq(Request $request)
    {
        
        $quest = DB::select('select * from questions  where id = :id',['id' =>  session()->get('id')+1]);
       return view('question',['quest'=>$quest]);
    }
    public function invoice()
    {
        return view('admin-panel.invoice');
    }

}
