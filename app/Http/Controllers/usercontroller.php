<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\user;
use App\student;
use Auth;
use App\testname;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function index(Request $request)
    {
    	$this->validation($request);
    	/*$password=bcrypt($request->password);
        $name=$request->uname;
        $email=$request->email;
        DB::table('users')->insert(['uname'=>$name,'email'=>$email,'password'=>$password]);*/
        $session= Session()->getId();
        $user= new user;

        $user->uname= $request->uname;
        $user->email= $request->email;
        $user->password= $request['password']= bcrypt($request->password);
         $user->session=$session;
         

         $user->save();
         //user::create($request->all());

        return redirect('/login_users');

    }
    public function register()
    {
          return view('register');
    }
    public function validation($request)
    {
    	return $this->validate($request,[
    		'uname'=>'required|max:255',
    	    'email'=>'required|email|unique:users|max:255',
    	    'password'=>'required',
    ]);
    }

    public function login_user()
    {
    	return view('login');
    }

    public function validate_user(Request $request)
    {
    	$this->validate($request,[
    		'email'=>'required|email|max:255',
    	    'password'=>'required|max:255',
             ]);
    	  //$credentials = $request->only('email', 'password');
        if(Auth::attempt(array('email'=>$request->email,'password'=>$request->password)))
    	{

    		return redirect('/user_account');
    	}
    	else
    	{
    		echo $request->email;
    		echo $request->password;
    		echo "worng password";
    	}
    }

    public function exam(Request $request)
    {
       $testname = new testname;
       $tname=$request->tname;
        $quest = DB::select('select * from questions  WHERE tname=:tname',['tname'=>$tname]);
        return view('question',['quest'=>$quest]);

    }

    public function results()
    {
        $tname=$request->tname;
      $res= DB::select('select * from answers WHERE tname=tname=:tname',['tname'=>$tname]);

      foreach ($res as $res) {
      }
    }
    
}
