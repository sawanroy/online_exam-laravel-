<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessioncontroller extends Controller
{
    public function session()
    {

    	$request->session()->put('key', 'value');
    }
}
