<?php

namespace App\Http\Middleware;

use Closure;

class hellomiddlewaree
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $ip= $request->ip();
        if($ip=='127.0.0.1')
        {
            return redirect('/adminlogin');
        }
        else
        {
            return redirect('/login_users');
        }
        return $next($request);
    }

    public function handle2($request,Closure $next)
    {
        $id=session()->get('id');
        if(isset($id))
        {
            return redirect('');
        }
        else
        {
            return redirect('');
        }    
    }
}
