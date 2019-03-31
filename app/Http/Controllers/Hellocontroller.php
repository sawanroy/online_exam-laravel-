<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

class Hellocontroller extends Controller
{

	public function hello()
	{
    return view('login');
    }
    public function admin()
    {
    	return view('admin-panel/index');
    }
}
